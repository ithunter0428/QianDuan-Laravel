@extends('layouts.master')

@section('scripts')
@endsection

@section('content')
<div class="container">
	<div class="page-wrap_subT"><h2>订单明细</h2></div>

	<div class="my-pages-btn">
		<div class="my-pages-btn-container">
			<div class="my-btn">
				<a href="MemAddrPop_L.htm" class="button blue-line  full-width"></span>发货地址</a>
			</div>
			<div class="my-btn">
				<a href="DlvrMny.htm" class="button blue-line  full-width"><span></span>物流费用</a>
			</div>
			<div class="my-btn">
				<a href="CenterAddrPop_S.htm" class="button blue-line  full-width"></span>地址</a>
			</div>
		</div>
	</div>


	<!-- my-pages Container -->
	<div class="my-pages-box">
		<!-- my-pages Container -->
		<div class="my-pages-container">
			<div class="my-page recommended">
				<h3>测试</h3>
				<div class="my-page-label"><strong>等级5</strong></div>
			</div>
			<div class="my-page grade">
				<h3>我的编号</h3>
				<div class="my-page-label"><strong>SP28</strong></div>
			</div>
			<div class="my-page grade br0">
				<h3>余额(￦)</h3>
				<div class="my-page-label"><a href="DepositUse_L.html"><strong>32,038,804</strong></a></div>
			</div>
			<!--div class="my-page grade last">
				<h3>포인트(P)</h3>
				<div class="my-page-label"><a href="/Front/Deposit/PointUse_L.asp"><strong>194,162</strong></a></div>
			</div-->
			<div class="my-page grade last">
				<h3>优惠券</h3>
				<div class="my-page-label"><a href="Coupon_L.htm"><strong>2</strong></a></div>
			</div>
			<div class="my-page grade last br0">
				<h3>未支付</h3>
				<div class="my-page-label"><a href="Payment_W.htm"><strong>12</strong></a></div>
			</div>
		</div>
	</div>
	<!-- my-pages Container / End -->


	<!-- my-steps Container PC-->
	<div class="my-steps-box">
		<!-- my-pages Container -->

		<!-- B: 订单 -->
				<div class="my-steps-container">



					<div class="my-step">
						<h3><i class="icon-feather-shopping-cart"></i>代购</h3>
						<div class="my-step-label">
							<ul>



				<li class="">
					<a href="mypage.htm"><span>报价</span><strong>
					<span class="fr">
						10
					</span></strong></a>
				</li>



				<li class="">
					<a href="mypage.htm"><span>支付待定</span><strong>
					<span class="fr">
						7
					</span></strong></a>
				</li>



				<li class="">
					<a href="mypage.htm"><span>支付完成</span><strong>
					<span class="fr">
						40
					</span></strong></a>
				</li>



				<li class="">
					<a href="mypage.htm"><span>交易完成</span><strong>
					<span class="fr">
						1
					</span></strong></a>
				</li>


								</ul>
							</div>
						</div>


					<div class="my-step">
						<h3><i class="icon-feather-truck"></i>代理发货</h3>
						<div class="my-step-label">
							<ul>



				<li class="">
					<a href="mypage.htm"><span>临时保存</span><strong>
					<span class="fr">
						34
					</span></strong></a>
				</li>



				<li class="">
					<a href="mypage.htm"><span>申请</span><strong>
					<span class="fr">
						27
					</span></strong></a>
				</li>


								</ul>
							</div>
						</div>


					<div class="my-step">
						<h3><i class="icon-feather-log-out"></i>入/出库</h3>
						<div class="my-step-label">
							<ul>



				<li class="">
					<a href="mypage.htm"><span>入库处理中</span><strong>
					<span class="fr">
						21
					</span></strong></a>
				</li>



				<li class="">
					<a href="mypage.htm"><span>入库结束</span><strong>
					<span class="fr">
						9
					</span></strong></a>
				</li>



				<li class="">
					<a href="mypage.htm"><span>支付待定</span><strong>
					<span class="fr">
						4
					</span></strong></a>
				</li>



				<li class="">
					<a href="mypage.htm"><span>支付完成</span><strong>
					<span class="fr">
						18
					</span></strong></a>
				</li>



				<li class="">
					<a href="mypage.htm"><span>等待出库</span><strong>
					<span class="fr">
						21
					</span></strong></a>
				</li>



				<li class="">
					<a href="mypage.htm"><span>出库完毕</span><strong>
					<span class="fr">
						65
					</span></strong></a>
				</li>


								</ul>
							</div>
						</div>


					<div class="my-step">
						<h3><i class="icon-feather-x-circle"></i>错误</h3>
						<div class="my-step-label">
							<ul>



				<li class="">
					<a href="mypage.htm"><span>入库错误</span><strong>
					<span class="fr">
						14
					</span></strong></a>
				</li>



				<li class="">
					<a href="mypage.htm"><span>忽略错误</span><strong>
					<span class="fr">
						0
					</span></strong></a>
				</li>



				<li class="">
					<a href="mypage.htm"><span>保留出库</span><strong>
					<span class="fr">
						2
					</span></strong></a>
				</li>



				<li class="">
					<a href="mypage.htm"><span>取消申请</span><strong>
					<span class="fr">
						46
					</span></strong></a>
				</li>


								</ul>
							</div>
						</div>


					<div class="my-step">
						<h3><i class="icon-feather-refresh-cw"></i>退货管理</h3>
						<div class="my-step-label">
							<ul>



				<li class="">
					<a href="mypage.htm"><span>退后申请</span><strong>
					<span class="fr">
						8
					</span></strong></a>
				</li>



				<li class="">
					<a href="mypage.htm"><span>支付待定</span><strong>
					<span class="fr">
						1
					</span></strong></a>
				</li>



				<li class="">
					<a href="mypage.htm"><span>支付完成</span><strong>
					<span class="fr">
						10
					</span></strong></a>
				</li>



				<li class="">
					<a href="mypage.htm"><span>退货完成</span><strong>
					<span class="fr">
						3
					</span></strong></a>
				</li>


								</ul>
							</div>
						</div>


					<div class="my-step">
						<h3><i class="icon-feather-package"></i>库存管理</h3>
						<div class="my-step-label">
							<ul>



				<li class="">
					<a href="mypage.htm"><span>库存全部明细</span><strong>
					<span class="fr">
						40
					</span></strong></a>
				</li>



				<li class="">
					<a href="mypage.htm"><span>申请库存</span><strong>
					<span class="fr">
						14
					</span></strong></a>
				</li>



				<li class="">
					<a href="mypage.htm"><span>入库结束</span><strong>
					<span class="fr">
						12
					</span></strong></a>
				</li>



				<li class="">
					<a href="mypage.htm"><span>可使用</span><strong>
					<span class="fr">
						11
					</span></strong></a>
				</li>



				<li class="">
					<a href="mypage.htm"><span>库存售馨</span><strong>
					<span class="fr">
						3
					</span></strong></a>
				</li>



				<li class="">
					<a href="mypage.htm"><span>库存发货明细</span><strong>
					<span class="fr">
						49
					</span></strong></a>
				</li>

					</ul>	</div></div>

		</div>
	</div>
	<!-- my-pages Container / End -->

	<!-- Accordion my-steps mobile버전-->
	<div class="accordion js-accordion my-steps-mobile">



			<div class="accordion__item js-accordion-item "> <!-- active -->
				<div class="accordion-header js-accordion-header"><i class="icon-feather-shopping-cart"></i>代购</div>
				<div class="accordion-body js-accordion-body ">
					<div class="accordion-body__contents">
						<ul>



			<li class=""><a href="mypage.htm"><span>报价</span><strong>
				10
			</strong></a></li>



			<li class=""><a href="mypage.htm"><span>支付待定</span><strong>
				7
			</strong></a></li>



			<li class=""><a href="mypage.htm"><span>支付完成</span><strong>
				40
			</strong></a></li>



			<li class=""><a href="mypage.htm"><span>交易完成</span><strong>
				1
			</strong></a></li>


								</ul>
							</div>
						</div>
					</div>


			<div class="accordion__item js-accordion-item "> <!-- active -->
				<div class="accordion-header js-accordion-header"><i class="icon-feather-truck"></i>代理发货</div>
				<div class="accordion-body js-accordion-body ">
					<div class="accordion-body__contents">
						<ul>



			<li class=""><a href="mypage.htm"><span>临时保存</span><strong>
				34
			</strong></a></li>



			<li class=""><a href="mypage.htm"><span>申请</span><strong>
				27
			</strong></a></li>


								</ul>
							</div>
						</div>
					</div>


			<div class="accordion__item js-accordion-item "> <!-- active -->
				<div class="accordion-header js-accordion-header"><i class="icon-feather-log-out"></i>入/出库</div>
				<div class="accordion-body js-accordion-body ">
					<div class="accordion-body__contents">
						<ul>



			<li class=""><a href="mypage.htm"><span>入库处理中</span><strong>
				21
			</strong></a></li>



			<li class=""><a href="mypage.htm"><span>入库结束</span><strong>
				9
			</strong></a></li>



			<li class=""><a href="mypage.htm"><span>支付待定</span><strong>
				4
			</strong></a></li>



			<li class=""><a href="mypage.htm"><span>支付完成</span><strong>
				18
			</strong></a></li>



			<li class=""><a href="mypage.htm"><span>等待出库</span><strong>
				21
			</strong></a></li>



			<li class=""><a href="mypage.htm"><span>出库完毕</span><strong>
				65
			</strong></a></li>


								</ul>
							</div>
						</div>
					</div>


			<div class="accordion__item js-accordion-item "> <!-- active -->
				<div class="accordion-header js-accordion-header"><i class="icon-feather-x-circle"></i>错误</div>
				<div class="accordion-body js-accordion-body ">
					<div class="accordion-body__contents">
						<ul>



			<li class=""><a href="mypage.htm"><span>入库错误</span><strong>
				14
			</strong></a></li>



			<li class=""><a href="mypage.htm"><span>忽略错误</span><strong>
				0
			</strong></a></li>



			<li class=""><a href="mypage.htm"><span>保留出库</span><strong>
				2
			</strong></a></li>



			<li class=""><a href="mypage.htm"><span>取消申请</span><strong>
				46
			</strong></a></li>


								</ul>
							</div>
						</div>
					</div>


			<div class="accordion__item js-accordion-item "> <!-- active -->
				<div class="accordion-header js-accordion-header"><i class="icon-feather-refresh-cw"></i>退货管理</div>
				<div class="accordion-body js-accordion-body ">
					<div class="accordion-body__contents">
						<ul>



			<li class=""><a href="mypage.htm"><span>申请退货</span>
			<strong>
				8
			</strong></a></li>



			<li class=""><a href="mypage.htm"><span>支付待定</span><strong>
				1
			</strong></a></li>



			<li class=""><a href="mypage.htm"><span>支付完成</span><strong>
				10
			</strong></a></li>



			<li class=""><a href="mypage.htm"><span>完成退货</span>
			<strong>
				3
			</strong></a></li>


								</ul>
							</div>
						</div>
					</div>


			<div class="accordion__item js-accordion-item "> <!-- active -->
				<div class="accordion-header js-accordion-header"><i class="icon-feather-package"></i>库存管理</div>
				<div class="accordion-body js-accordion-body ">
					<div class="accordion-body__contents">
						<ul>



			<li class=""><a href="mypage.htm<strong></strong>"><span>库存全部明细</span>
			<strong>
				40
			</strong></a></li>



			<li class=""><a href="mypage.htm"><span>申请库存</span>
			<strong>
				14
			</strong></a></li>



			<li class=""><a href="mypage.htm3"><span>入库结束</span><strong>
				12
			</strong></a></li>



			<li class=""><a href="mypage.htm"><span>可使用</span>
			<strong>
				11
			</strong></a></li>



			<li class=""><a href="mypage.htm"><span>库存售馨</span>
			<strong>
				3
			</strong></a></li>



			<li class=""><a href="mypage.htm"><span>库存发货明细</span>
			<strong>
				49
			</strong></a></li>

					</ul>		</div>	</div></div>

	</div>
		<!-- E: 订单현황 탭 -->

</div>


<!-- Section -->
<div class="section">
	<!-- Page Content
	================================================== -->
	<div class="container">
		<!-- Row -->
		<div class="row">
			<div class="col-xl-12">

				<form name="frmSearch" id="frmSearch" method="get">
					<input type="hidden" name="gMnu1" value="206">
					<input type="hidden" name="gMnu2" value="20601">
					<input type="hidden" name="sGo" value="1">


				<!-- search-con  -->
				<div class="search-con">

					<div class="search-con-inner">
						<div class="submit-field ">
							<div class="select-field ">
								<select name="sReqDvsCd" class="with-border">
								<option value="">= 申请区分</option>

									<option value="1">代理发货</option>

									<option value="2">代购</option>

									<option value="3">代理退货</option>

									<option value="5">商城</option>

								</select>
							</div>
						</div>
						<div class="submit-field ">
							<div class="select-field ">
								<select name="sStateSeq" class=" with-border" data-size="10">
								<option value="">= 下单状态</option>
								<optgroup label="[代购]">
									<option value="14">代购金额</option>

									<option value="15">支付待定</option>

									<option value="16">完成支付</option>

									<option value="17">完成购买</option>
								</optgroup><optgroup label="[代理发货]">
									<option value="1">临时保存</option>

									<option value="2">接受申请</option>
								</optgroup><optgroup label="[入/出库]">
									<option value="3">入库处理中</option>

									<option value="4">入库结束</option>

									<option value="5">支付待定</option>

									<option value="6">完成支付</option>

									<option value="7">出库待定</option>

									<option value="8">出库错误</option>
								</optgroup><optgroup label="[错误]">
									<option value="9">错误入库</option>

									<option value="10">无视错误</option>

									<option value="11">出库保留</option>

									<option value="13">取消申请</option>
								</optgroup><optgroup label="[退货管理]">
									<option value="18">申请退货</option>

									<option value="19">支付待定</option>

									<option value="20">完成支付</option>

									<option value="21">退货完成</option>

								</optgroup></select>
							</div>
						</div>
						<div class="submit-field ">
							<div class="select-field ">
								<select name="sSvcDvsCd" class=" with-border">
									<option value="">= 入库区分</option>

										<option value="1">自动支付</option>

										<option value="2">手动结算</option>

								</select>
							</div>
						</div>

						<div class="submit-field ">
							<div class="input-with-icon-left">
								<i class="icon-feather-calendar"></i>
								<input type="text" class="input-text with-border dtPic" name="sBeginDt" maxlength="10" data-lang="en" data-years="2018-2022" data-format="YYYY-MM-DD" placeholder="开始日期" value="" readonly>
							</div>
						</div>
						<div class="submit-field ">
							<div class="input-with-icon-left">
								<i class="icon-feather-calendar"></i>
								<input type="text" class="input-text with-border dtPic" name="sEndDt" maxlength="10" data-lang="en" data-years="2018-2022" data-format="YYYY-MM-DD" placeholder="结束日期" value="" readonly>
							</div>
						</div>

						<div class="submit-field">
							<input type="text" name="sOrderNo" maxlength="8" value="" placeholder="订单号" class="with-border EnterKey">
						</div>
						<div class="submit-field">
							<input type="text" name="sTrkNo" maxlength="40" value="" placeholder="渠道No" class="with-border EnterKey">
						</div>
						<div class="submit-field">
							<input type="text" name="sConsNmKr" maxlength="40" value="" placeholder="收件人" class="with-border EnterKey">
						</div>
						<div class="submit-field">
							<input type="text" name="sProNm" maxlength="40" value="" placeholder="商品名称" class="with-border EnterKey">
						</div>
						<div class="submit-field">
							<input type="text" name="sIvcNo" maxlength="40" value="" placeholder="运单号" class="with-border EnterKey">
						</div>

						<div class="search-btn">

							<a href="javascript:" onClick="fnSearch(&#39;frmSearch&#39;, &#39;1&#39;);" class="button  ripple-effect">搜索 <i class="icon-feather-search"></i></a>
						</div>
						<div class="clearfix"></div>
					</div>


				</div>
				<!-- search-con  / End -->

				</form>


				<div class="notify-box">
					<div class="switch-container">
						Total : 341
					</div>
					<div class="fr">
						<a href="javascript:" onClick="fnExeclDown();" class="button green ripple-effect">下载 <i class=""></i></a>
						<a href="OrderPro_L.htm" class="button ripple-effect">track管理 <i class=""></i></a>
					</div>
				</div>



				<!-- projects List Container -->
				<div class="list-container pro-list-layout compact-list margin-bottom-20">

					<div class="project-title">
						<!--project -->
						<div class="project">
							<!-- Overview -->
							<div class="project-overview">
								<div class="project-no">No

								</div>
								<div class="project-avatar">图片</div>
								订单信息
							</div>
							<!-- Details -->
							<div class="project-details">
								<span class="fr">状态</span>
							</div>
						</div>
					</div>



					<div class="project-con">
						<!--project -->
						<div class="project">
							<!-- Overview -->
							<div class="project-overview">
								<div class="project-overview-inner order-area">
									<div class="project-no">
										<span>1</span>

									</div>
									<!-- Avatar -->
									<div class="project-avatar">
										<a href="javascript:" class="ProViewBtn" orderno="20400033" title="상품보기"><div class="verified-badge"><i class="icon-feather-more-vertical"></i></div>
										{{-- <img src="./mypage/ImgUrl_41_20200416yfw8ua.jpg" onerror="this.src=&#39;/Image/img-upload.png&#39;" alt="" width="100%;" height="100%;"></a> --}}
									</div>
									<!-- Name -->
									<div class="project-name">
										<h4>代理发货  <a href="Order_V.html" class="num" title="订单信息">20400033</a> <img class="flag" src="./mypage/Nation_CN_20180803zhbd46.png" alt=""></h4>
										<ul class="notification_con">
											<li><span class="notification notice"><strong>威海(海运) / 自动支付 / 姓名 / 公司</strong></span></li>
											<li><a href="javascript:" onClick="fnPopWinCT(&#39;./OrderCharge_S.asp?sOrderNo=20400033&amp;sChargeCd=1&#39;, &#39;OrderCharge_S&#39;, 500, 400);" class="notification error "><strong>国际 快递费用 (未支付)</strong> <span>￦65,322</span></a></li>

										</ul>
										<p class="margin-top-5">
											<strong>1 개 / ￥100.00</strong>&nbsp;


													<i class="icon-feather-box" style="position:Relative; top:1px;padding-right:3px;"></i>重量信息 [ 实际重量 : 10.00kg / 适用重量 : 10.00kg ]
										</p>
									</div>
								</div>
							</div>

							<!-- Details -->
							<div class="project-details">
								<div class="project-details-list">
									<ul class="order-pro-con">
										<li>入库状态 <span>入库结束</span></li>
										<li>下单状态 <span><strong>出库待定</strong></span></li>
										<li>处理日期 <span>2022-06-21 09:39</span></li>
										<li>发布日期 <span>2020-04-25 12:19</span></li>
									</ul>

									<div class="project-btn">

										<a href="Order_V.html" target="_blank" class="button gray ripple-effect" title="查看订单信息"><i class="icon-feather-eye"></i> 查看订单</a>





									</div>
								</div>
							</div>
						</div>



					<div class="project-con">
						<!--project -->
						<div class="project">
							<!-- Overview -->
							<div class="project-overview">
								<div class="project-overview-inner order-area">
									<div class="project-no">
										<span>4</span>

									</div>
									<!-- Avatar -->
									<div class="project-avatar">
										<a href="javascript:" class="ProViewBtn" orderno="21700015" title="商品详情"><div class="verified-badge"><i class="icon-feather-more-vertical"></i></div>
										{{-- <img src="./mypage/O1CN01KOikSm1KQra8Iahzl_!!0-item_pic.jpg_250x250q90.jpg" onerror="this.src=&#39;/Image/img-upload.png&#39;" alt="" width="100%;" height="100%;"></a> --}}
									</div>
									<!-- Name -->
									<div class="project-name">
										<h4>代理发货  <a href="Order_V.html" class="num" title="订单信息 보기">21700015</a> <img class="flag" src="./mypage/Nation_CN_20180803zhbd46.png" alt=""></h4>
										<ul class="notification_con">
											<li><span class="notification notice"><strong>威海(航空) / 手动结算 / KIMGREEN / 个人(不一致)</strong></span></li>
											<li><a href="javascript:" onClick="fnPopWinCT(&#39;./OrderCharge_S.asp?sOrderNo=21700015&amp;sChargeCd=1&#39;, &#39;OrderCharge_S&#39;, 500, 400);" class="notification error "><strong>国际 快递费用 (未支付)</strong> <span>￦5,922</span></a></li>

										</ul>
										<p class="margin-top-5">
											<strong>7 个 / ￥326.60</strong>&nbsp;


													<i class="icon-feather-box" style="position:Relative; top:1px;padding-right:3px;"></i>重量信息 [ 实际重量 : 1.00kg / 适用重量 : 1.50kg ]
										</p>
									</div>
								</div>
							</div>

							<!-- Details -->
							<div class="project-details">
								<div class="project-details-list">
									<ul class="order-pro-con">
										<li>入库状态 <span>入库结束</span></li>
										<li>下单状态 <span><strong>支付待定</strong></span></li>
										<li>处理日期 <span>2022-06-16 15:00</span></li>
										<li>发布日期 <span>2021-07-22 14:33</span></li>
									</ul>

									<div class="project-btn">

											<a href="Payment_W.htm" class="button gray2 ripple-effect" title="支付">支付</a>
											<a href="CtmsCheck_S.html" target="_blank" class="button gray ripple-effect" title="清关浏览"><i class="icon-feather-package"></i> 清关浏览</a>
										<a href="Order_V.html" target="_blank" class="button gray ripple-effect" title="订单信息"><i class="icon-feather-eye"></i> 查看订单</a>

									</div>
								</div>
							</div>
						</div>
                    </div>
@endsection
