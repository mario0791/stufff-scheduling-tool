<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Dashboard')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="dash-container">
        <div class="dash-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h4 class="m-b-10"><?php echo e(__('Dashboard')); ?></h4>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-7">
                    <div class="row">
                        <div class="col-lg-4 col-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="theme-avtar bg-primary mb-3">
                                        <i class="ti ti-users"></i>
                                    </div>
                                    <p class="text-muted text-sm mt-4 mb-2"><?php echo e(__('Paid Users')); ?> : <span class="text-dark"><?php echo e($user['total_paid_user']); ?></span></p>
                                    <h6 class="mb-3"><?php echo e(__('Total Users')); ?></h6>
                                    <h3 class="mb-0">1</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="theme-avtar bg-info mb-3">
                                        <i class="ti ti-shopping-cart-plus"></i>
                                    </div>
                                    <p class="text-muted text-sm mt-4 mb-2"><?php echo e(__('Total Order Amount')); ?> : <span class="text-dark"><?php echo e(env('CURRENCY_SYMBOL') . $user['total_orders_price']); ?></span></p>
                                    <h6 class="mb-3"><?php echo e(__('Total Orders')); ?></h6>
                                    <h3 class="mb-0"><?php echo e($user->total_orders); ?></h3>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="theme-avtar bg-danger mb-3">
                                        <i class="ti ti-trophy"></i>
                                    </div>
                                    <p class="text-muted text-sm mt-4 mb-2"><?php echo e(__('Most Purchase Plan')); ?> : <span class="text-dark"><?php echo e($user['most_purchese_plan']); ?></span></p>
                                    <h6 class="mb-3"><?php echo e(__('Total Plans')); ?></h6>
                                    <h3 class="mb-0"><?php echo e(env('CURRENCY_SYMBOL') . $user['total_orders_price']); ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="card">
                        <div class="card-header">
                            <h5><?php echo e(__('Recent Order')); ?></h5>
                            <h6 class="last-day-text text-end"><?php echo e(__('Last 7 Days')); ?></h6>
                        </div>
                        <div class="card-body">
                            <div id="order-chart" data-color="primary" data-height="200"></div>
                        </div>
                    </div>
                </div>
                <!-- [ sample-page ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('pagescript'); ?>
    <script>
        (function() {
            var options = {
                chart: {
                    height: 350,
                    type: 'area',
                    toolbar: {
                        show: false,
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    width: 2,
                    curve: 'smooth'
                },
                series: [{
                    name: "Order",
                    data: <?php echo e(json_encode($chartData['data'])); ?>,
                }],
                xaxis: {
                    labels: {
                        format: "MMM",
                        style: {
                            fontSize: "14px",
                            cssClass: "apexcharts-xaxis-label"
                        }
                    },
                    type: "text",
                    categories: JSON.parse("<?php echo e(json_encode($chartData['label'])); ?>".replace(/&quot;/g,'"')),
                },
                colors: ['#ffa21d'],

                grid: {
                    strokeDashArray: 4,
                },
                legend: {
                    show: false,
                },
                
            };
            var chart = new ApexCharts(document.querySelector("#order-chart"), options);
            chart.render();
        })();
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sites/1a/7/74fc9abc3b/public_html/resources/views/super_admin.blade.php ENDPATH**/ ?>