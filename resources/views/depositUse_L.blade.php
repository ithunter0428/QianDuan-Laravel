@extends('layouts.master')

@section('content')
<div class="container">
	<div class="page-wrap_subT"><h2>余额 明细</h2></div>

	<div class="my-pages-btn">
		<div class="my-pages-btn-container">
			<div class="my-btn">
				<a href="MemAddrPop_L.htm"  class="button blue-line  full-width"><span>发货地址</a>
			</div>
			<div class="my-btn">
				<a href="DlvrMny.htm" class="button blue-line  full-width"><span>物流费用</a>
			</div>
			<div class="my-btn">
				<a href="CenterAddrPop_S.htm"  class="button blue-line  full-width"><span>我的地址</a>
			</div>
		</div>
	</div>


	<!-- my-pages Container -->
	<div class="my-pages-box">
		<!-- my-pages Container -->
		<div class="my-pages-container">
			<div class="my-page recommended">
				<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></h3>
				<div class="my-page-label"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5级</font></font></strong></div>
			</div>
			<div class="my-page grade">
				<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的邮箱</font></font></h3>
				<div class="my-page-label"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SP28</font></font></strong></div>
			</div>
			<div class="my-page grade br0">
				<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">余额 (￦)</font></font></h3>
				<div class="my-page-label"><a href="DepositUse_L.html"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">32,038,804</font></font></strong></a></div>
			</div>
			<!--div class="my-page grade last">
				<h3>포인트(P)</h3>
				<div class="my-page-label"><a href="/Front/Deposit/PointUse_L.asp"><strong>194,162</strong></a></div>
			</div-->
			<div class="my-page grade last">
				<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">优惠券</font></font></h3>
				<div class="my-page-label"><a href=" Coupon_L.htm"><strong>2</strong></a></div>
			</div>
			<div class="my-page grade last br0">
				<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未支付</font></font></h3>
				<div class="my-page-label"><a href="Payment_W.htm"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12</font></font></strong></a></div>
			</div>
		</div>
	</div>
	<!-- my-pages Container / End -->

	<!-- Row -->
	<div class="row">

		<div class="col-xl-12">
			<div class="category-tab-area ">
				<div class="category-tab">
				<div class="category-tab-link active"><a href="DepositReq_L.html">积分申请</a></div>
				<div class="category-tab-link  "><a href="DepositRet_L.html">退款申请</a></div>
				<div class="category-tab-link  "><a href="DepositUse_L.html">使用明细</a></div>
				</div>
			</div>


			<!-- search-con  -->
			<form method="post" name="frmSearch" id="frmSearch">
				<input type="hidden" name="sGo" id="sGo" value="1">
				<input type="hidden" name="sPageSize" id="sPageSize" value="10">
			<div class="search-con margin-top-20">
				<div class="search-con-inner2">
					<div class="submit-field">
						<div class="select-field">
							<select class=" with-border" name="sUseDvsCd">
								<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">== 可选</font></font></option>

									<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">存款充值</font></font></option>

									<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">押金退还</font></font></option>

									<option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用支付</font></font></option>

									<option value="4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消付款</font></font></option>

									<option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">管理员存款支付</font></font></option>

									<option value="6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">行政押金累计/扣除</font></font></option>

									<option value="7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买退款</font></font></option>

							</select>
						</div>
					</div>
					<div class="submit-field">
						<div class="input-with-icon-left">
							<i class="icon-feather-calendar"></i>
							<input type="text" class="input-text with-border dtPic" name="sBeginDt" maxlength="10" data-lang="en" data-years="2015-2035" data-format="YYYY-MM-DD" placeholder="开始日期" value="" readonly>
						</div>
					</div>
					<div class="submit-field">
						<div class="input-with-icon-left">
							<i class="icon-feather-calendar"></i>
							<input type="text" class="input-text with-border dtPic" name="sEndDt" maxlength="10" data-lang="en" data-years="2015-2035" data-format="YYYY-MM-DD" value="" placeholder="结束日期" readonly>
						</div>
					</div>
					<div class="search-btn2"><a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, &#39;1&#39;);" class="button ripple-effect"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索</font></font><i class="icon-feather-search"></i></a></div>
					<div class="clearfix"></div>
				</div>
			</div>
			</form>
			<!-- search-con  / End -->


			<div class="notify-box">
				<div class="switch-container"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
					总计 : 337
				</font></font></div>
			</div>




			<div class="dashboard-box bd0 margin-top-0 margin-bottom-20">



				<form method="POST" name="frmDpstUseL" id="frmDpstUseL">


				<div class="content">
					<ul class="dashboard-box-list">
						<li class="ntc-height ntc-title">
							<!--board-listing -->
							<div class="board-listing">
								<!-- board-listing-details -->
								<div class="board-listing-details">
									<!-- Details -->
									<div class="board-listing-description">
										<div class="list-no s_txt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">序号</font></font></div>
										<h3 class="board-listing-title">
											<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用明细</font></font></strong>
										</h3>
										<!-- board-listing-footer -->
										<div class="board-listing-footer ntc fr">
											<ul class="fl">
												<li class="date"><span class="num s_txt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用日期</font></font></span></li>
												<li><span class="num s_txt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">金额</font></font></span></li>
												<li class="date"><span class="num s_txt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">余额</font></font></span></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Task Details -->
						</li>

						<li class="ntc-height">
							<!--board-listing -->
							<div class="board-listing">
								<!-- board-listing-details -->
								<div class="board-listing-details">
									<!-- Details -->
									<div class="board-listing-description">
										<div class="list-no s_txt">498</div>
										<h3 class="board-listing-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消付款 - 国际运费：20400033</font></font><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消付款</font></font></p></h3>
										<!-- board-listing-footer -->
										<div class="board-listing-footer ntc fr">
											<ul class="fl">
												<li class="date"><span class="num s_txt">2022-06-01</span></li>
												<li><span class="num s_txt"><strong class="fc_red">￦65,322</strong></span></li>
												<li class="date"><span class="num s_txt"><strong class="">￦32,038,804</strong></span></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Task Details -->
						</li>

						<li class="ntc-height">
							<!--board-listing -->
							<div class="board-listing">
								<!-- board-listing-details -->
								<div class="board-listing-details">
									<!-- Details -->
									<div class="board-listing-description">
										<div class="list-no s_txt">497</div>
										<h3 class="board-listing-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">付款取消-购买成本：22400018</font></font><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消付款</font></font></p></h3>
										<!-- board-listing-footer -->
										<div class="board-listing-footer ntc fr">
											<ul class="fl">
												<li class="date"><span class="num s_txt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-06-01</font></font></span></li>
												<li><span class="num s_txt"><strong class="fc_red">￦19,636</strong></span></li>
												<li class="date"><span class="num s_txt"><strong class="">￦31,973,482</strong></span></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Task Details -->
						</li>

						<li class="ntc-height">
							<!--board-listing -->
							<div class="board-listing">
								<!-- board-listing-details -->
								<div class="board-listing-details">
									<!-- Details -->
									<div class="board-listing-description">
										<div class="list-no s_txt">496</div>
										<h3 class="board-listing-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">付款取消-购买成本：22400019</font></font><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消付款</font></font></p></h3>
										<!-- board-listing-footer -->
										<div class="board-listing-footer ntc fr">
											<ul class="fl">
												<li class="date"><span class="num s_txt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-06-01</font></font></span></li>
												<li><span class="num s_txt"><strong class="fc_red"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦19,636</font></font></strong></span></li>
												<li class="date"><span class="num s_txt"><strong class="">￦31,953,846</strong></span></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Task Details -->
						</li>

						<li class="ntc-height">
							<!--board-listing -->
							<div class="board-listing">
								<!-- board-listing-details -->
								<div class="board-listing-details">
									<!-- Details -->
									<div class="board-listing-description">
										<div class="list-no s_txt">495</div>
										<h3 class="board-listing-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消付款 -</font></font><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消付款</font></font></p></h3>
										<!-- board-listing-footer -->
										<div class="board-listing-footer ntc fr">
											<ul class="fl">
												<li class="date"><span class="num s_txt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-06-01</font></font></span></li>
												<li><span class="num s_txt"><strong class="fc_red">￦42,500</strong></span></li>
												<li class="date"><span class="num s_txt"><strong class="">￦31,934,210</strong></span></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Task Details -->
						</li>

						<li class="ntc-height">
							<!--board-listing -->
							<div class="board-listing">
								<!-- board-listing-details -->
								<div class="board-listing-details">
									<!-- Details -->
									<div class="board-listing-description">
										<div class="list-no s_txt">494</div>
										<h3 class="board-listing-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消付款 - 国际运费：22500003</font></font><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消付款</font></font></p></h3>
										<!-- board-listing-footer -->
										<div class="board-listing-footer ntc fr">
											<ul class="fl">
												<li class="date"><span class="num s_txt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-06-01</font></font></span></li>
												<li><span class="num s_txt"><strong class="fc_red"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦42,500</font></font></strong></span></li>
												<li class="date"><span class="num s_txt"><strong class="">￦31,891,710</strong></span></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Task Details -->
						</li>

						<li class="ntc-height">
							<!--board-listing -->
							<div class="board-listing">
								<!-- board-listing-details -->
								<div class="board-listing-details">
									<!-- Details -->
									<div class="board-listing-description">
										<div class="list-no s_txt">493</div>
										<h3 class="board-listing-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消付款 - 国际运费：22500004</font></font><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消付款</font></font></p></h3>
										<!-- board-listing-footer -->
										<div class="board-listing-footer ntc fr">
											<ul class="fl">
												<li class="date"><span class="num s_txt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-06-01</font></font></span></li>
												<li><span class="num s_txt"><strong class="fc_red">￦6,500</strong></span></li>
												<li class="date"><span class="num s_txt"><strong class="">￦31,849,210</strong></span></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Task Details -->
						</li>

						<li class="ntc-height">
							<!--board-listing -->
							<div class="board-listing">
								<!-- board-listing-details -->
								<div class="board-listing-details">
									<!-- Details -->
									<div class="board-listing-description">
										<div class="list-no s_txt">492</div>
										<h3 class="board-listing-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运费支付 - 订单号：22500004</font></font><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用支付</font></font></p></h3>
										<!-- board-listing-footer -->
										<div class="board-listing-footer ntc fr">
											<ul class="fl">
												<li class="date"><span class="num s_txt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-06-01</font></font></span></li>
												<li><span class="num s_txt"><strong class="fc_red">￦-6,500</strong></span></li>
												<li class="date"><span class="num s_txt"><strong class="">￦31,842,710</strong></span></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Task Details -->
						</li>

						<li class="ntc-height">
							<!--board-listing -->
							<div class="board-listing">
								<!-- board-listing-details -->
								<div class="board-listing-details">
									<!-- Details -->
									<div class="board-listing-description">
										<div class="list-no s_txt">491</div>
										<h3 class="board-listing-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运费支付 - 订单号：22500003</font></font><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用支付</font></font></p></h3>
										<!-- board-listing-footer -->
										<div class="board-listing-footer ntc fr">
											<ul class="fl">
												<li class="date"><span class="num s_txt">2022-05-26</span></li>
												<li><span class="num s_txt"><strong class="fc_red">￦-42,500</strong></span></li>
												<li class="date"><span class="num s_txt"><strong class="">￦31,849,210</strong></span></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Task Details -->
						</li>

						<li class="ntc-height">
							<!--board-listing -->
							<div class="board-listing">
								<!-- board-listing-details -->
								<div class="board-listing-details">
									<!-- Details -->
									<div class="board-listing-description">
										<div class="list-no s_txt">489</div>
										<h3 class="board-listing-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运费支付 - 订单号：20400033</font></font><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用支付</font></font></p></h3>
										<!-- board-listing-footer -->
										<div class="board-listing-footer ntc fr">
											<ul class="fl">
												<li class="date"><span class="num s_txt">2022-05-12</span></li>
												<li><span class="num s_txt"><strong class="fc_red">￦-65,322</strong></span></li>
												<li class="date"><span class="num s_txt"><strong class="">￦31,891,710</strong></span></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Task Details -->
						</li>

						<li class="ntc-height">
							<!--board-listing -->
							<div class="board-listing">
								<!-- board-listing-details -->
								<div class="board-listing-details">
									<!-- Details -->
									<div class="board-listing-description">
										<div class="list-no s_txt">488</div>
										<h3 class="board-listing-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退还购买费用 - 订单号：22200017，产品号：1096，取消数量：2</font></font><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买退款</font></font></p></h3>
										<!-- board-listing-footer -->
										<div class="board-listing-footer ntc fr">
											<ul class="fl">
												<li class="date"><span class="num s_txt">2022-04-29</span></li>
												<li><span class="num s_txt"><strong class="fc_red">￦472</strong></span></li>
												<li class="date"><span class="num s_txt"><strong class="">￦31,957,032</strong></span></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Task Details -->
						</li>

					</ul>
				</div>
				</form>
			</div>
		</div>
	</div><!-- Row  / End -->

        <footer class="footer-area footer-default black-bg footer-map">
            <div class="container">
                <div class="footer-widget pt-165 pb-35">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget about-widget mb-40 wow fadeInUp" data-wow-delay=".2s">
                                <div class="logo mb-35">
                                    <a href="index1.html"><img src="static/picture/logo-2.png" alt="Theme Logo"></a>
                                </div>
                                <div class="about-content">
                                    <h4 class="text-underline">联系方式</h4>
                                    <ul>
                                        <li><i class="far fa-envelope"></i><span><a href="email-protection.html#abc3c4dfc7c2c5ceebccc6cac2c785c8c4c6"><span class="__cf_email__" data-cfemail="8ae2e5fee6e3e4efcaede7ebe3e6a4e9e5e7">[email&#160;protected]</span></a></span></li>
                                        <li><i class="far fa-map-marker-alt"></i><span>详细地址</span></li>
                                        <li><i class="far fa-phone"></i><span><a href="tel:100-0000-0000">Mobile: 100-0000-0000</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget footer-nav-widget mb-40 wow fadeInUp" data-wow-delay=".3s">
                                <h4 class="widget-title text-underline">使用指南</h4>
                                <ul class="footer-nav list-style-dot">
                                    <li><a href="#">物流指南</a></li>
                                    <li><a href="#">代购指南</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget footer-nav-widget mb-40 wow fadeInUp" data-wow-delay=".4s">
                                <h4 class="widget-title text-underline">代理发货</h4>
                                <ul class="footer-nav list-style-dot">
                                    <li><a href="Delivery_W.htm">发货申请</a></li>
                                    <li><a href="StockPro_W.htm">库存申请</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget footer-nav-widget mb-40 wow fadeInUp" data-wow-delay=".5s">
                                <h4 class="widget-title text-underline">代购申请</h4>
                                <ul class="footer-nav list-style-dot">
                                    <li><a href="buy_W.htm">代购申请</a></li>
                                    <li><a href="#">管理发货商品</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="text">
                                <p>Copyright &copy; 世强物流</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--====== End Footer ======-->
@endsection
