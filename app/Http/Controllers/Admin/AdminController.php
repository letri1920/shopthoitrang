<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Date;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Repositories\AdminRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    protected $repository;

    public function __construct(AdminRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAdmin(Request $request)
    {
        // thong ke doanh thu
        $product_count = $this->repository->getProducts();
        $order_count = $this->repository->getOrders();
        $user_count = $this->repository->getUsers();

        $listDay = Date::getListDayInMonth();
        $totalRevenue = Bill::where('status', 2)
            ->whereMonth('created_at', date('m'))
            ->select(DB::raw('sum(total) as totalMoney'), DB::raw('DATE(created_at) day'))
            ->groupBy('day')
            ->get()
            ->toArray();
        $revenueProfit = Bill::where('status', 2)
            ->whereMonth('created_at', date('m'))
            ->select(DB::raw('sum(total_profit) as totalMoney'), DB::raw('DATE(created_at) day'))
            ->groupBy('day')
            ->get()
            ->toArray();

        $arrTotalRevenue = [];
        $arrRevenueProfit = [];
        foreach ($listDay as $day) {
            $total = 0;
            foreach ($totalRevenue as $key => $revenue) {
                if ($revenue['day'] == $day) {
                    $total = $revenue['totalMoney'];
                    break;
                }
            }
            $arrTotalRevenue[] = (int)$total;

            $total = 0;
            foreach ($revenueProfit as $key => $revenue) {
                if ($revenue['day'] == $day) {
                    $total = $revenue['totalMoney'];
                    break;
                }
            }
            $arrRevenueProfit[] = (int)$total;
        }
        $viewData = [
            // 'statusBill'                => json_encode($statusBill),
            'listDay'                   => json_encode($listDay),
            'arrTotalRevenue'       => json_encode($arrTotalRevenue),
            'arrRevenueProfit'    => json_encode($arrRevenueProfit)
        ];
        // end thong ke doanh thu 

        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

        //Sản phẩm xem nhiều
        $product_views = Product::orderBy('product_views', 'DESC')->limit(10)->get();
        // end sản phẩm xem nhiều

        $product_bests = Product::orderBy('sold_quantity', 'DESC')->limit(10)->get();

        $from = $request->from;
        $to = $request->to;

        $total_revenue_now = Bill::where('status',2)->where('date_order', $now)->sum('total');

        $revenue_profit_now = Bill::where('status',2)->where('date_order', $now)->sum('total_profit');
        

        $total_revenue = $this->repository->getTotalRevenue($request);
        $revenue_profit = $this->repository->getrevenueProfit($request);

        return view('admin.index', $viewData, compact('product_count','order_count','user_count','product_views','product_bests','total_revenue',
        'revenue_profit','from','to','total_revenue_now','revenue_profit_now'
        ));
    }
}
