<div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span class="fa fa-bell"> <strong>Bugün Yapılması Gereken Rezervasyonlar</strong></span>
                            </div> 
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID No.</th>
                                                <th>İsim</th>
                                                <th>Telefon</th>
                                                <th>Tır</th>
                                                <th>TırId</th>
                                                <th>Tarih</th>
                                                <th>Teslimat Tarihi</th>
                                                <th>Fiyat</th>
                                                <th>Teslimat Günü</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php duetoday("bookings");?>
                                        </tbody>
                                    </table>
                                    <a href="http://localhost/busbooking/bookings_view.php?SortField=&SortDirection=&FilterAnd%5B1%5D=and&FilterField%5B1%5D=8&FilterOperator%5B1%5D=like&FilterValue%5B1%5D=<?php $today=date('m%/d%/Y'); echo $today;?>" class="btn btn-info btn-block fa fa-list">Uygun Olanları Gör</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>