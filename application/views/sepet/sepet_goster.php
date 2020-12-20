


   <div class="card shopping-cart" style="font-size:1rem !important;">
            <div class="card-header  text-light" style="background-color:#fcba03;color:#000!important;">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Alışverişi Tamamla
               
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
                    <!-- PRODUCT -->




   <?php  foreach($this->cart->contents() as $urun) { ?>


                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="card-img" style="width:60px;" src="<?php echo base_url("images/uploads/").$urun["img"];?>" alt="prewiew" >
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                            <h4 class="product-name" style="font-size:1.2em;"><strong><?php echo $urun["name"];?></strong></h4>
                            <h4  style="font-size:1.2em;">
                                <small>Ürün Açıklaması</small>
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-4 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                <h6 style="font-size:0.95em;" ><strong><?php echo sprintf("%.2f",$urun["price"] ); ?> TL <span class="text-muted">x</span></strong></h6>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                                <div class="quantity" productID="<?php echo $urun["id"];?>">
                                    <input type="button"  value="+" class="plus" onclick="sepeteEkle(<?php echo $urun["id"];?>)">
                                    <input type="number" step="1" max="99" min="1" value="<?php echo $urun["qty"];?>" title="Qty" class="qty"
                                           size="4" readonly>
                                    <input type="button" value="-" class="minus" onclick="urunAzalt('<?php echo $urun["rowid"];?>')">
                                </div>
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 text-right ml-2">
                                <button type="button" class="btn btn-outline-danger btn-xs" onclick="urunSil('<?php echo $urun["rowid"];?>')">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <hr>

   <?php }?>






























                    <!-- END PRODUCT -->
                   
                <div class="pull-right">
                    <a href="" class="btn btn-outline-secondary pull-right">
                        Update shopping cart
                    </a>
                </div>
            </div>
            <div class="card-footer">
               
                <div class="pull-right" style="margin: 10px">
                    <a href="<?php echo base_url("siparis");?>" class="btn btn-primary pull-right ml-4 ">Siparişi Tamamla
                    </a>
                    <div class="pull-right" style="margin: 5px">
                       Toplam Tutar: <b class=""><?php echo  sprintf("%.2f", $this->cart->total()  ); ?> TL</b>
                    </div>
                </div>
            </div>
        </div>