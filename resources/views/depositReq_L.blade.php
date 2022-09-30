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
				<h3></h3>
				<div class="my-page-label"><a href="Payment_W.htm"><strong>12</strong></a></div>
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





			<div class="dashboard-box margin-top-20 margin-bottom-20">


				<form method="POST" name="frmDpst" id="frmDpst">
					<input type="hidden" name="sKind" id="sKind" value="RQ">
					<input type="hidden" name="REQ_DVS_CD" id="REQ_DVS_CD" value="1">
					<input type="hidden" name="COMP_YN" id="COMP_YN" value="N">
					<input type="hidden" name="MEM_CODE" id="MEM_CODE" value="41">
					<input type="hidden" name="sGo" id="sGo" value="1">
					<input type="hidden" name="sPageSize" id="sPageSize" value="10">

				<div class="content">
					<ul class="dashboard-box-list">
						<li>
							<div class="row">
								<div class="col-xl-4 col-md-4">
									<div class="submit-field">
										<input type="text" name="MNY" class="with-border" onBlur="this.value=fnNumChiper(this.value, 0);" placeholder="金额(￦)">
									</div>
								</div>
								<div class="col-xl-4 col-md-4">
									<div class="submit-field">
										<input type="text" name="PAYIN_NM" maxlength="40" class="with-border" placeholder="姓名">
									</div>
								</div>
								<div class="col-xl-4 col-md-4">
									<div class="input-with-icon-left">
										<i class="icon-feather-calendar"></i>
										<input type="text" class="input-text with-border dtPic" name="PAYIN_DT" maxlength="10" data-lang="en" data-years="2015-2035" data-format="YYYY-MM-DD" placeholder="日期" data-tippy-placement="top" readonly>
									</div>
								</div>
								<div class="col-xl-12">
									<div class="notification warning">
										<div class="select-field ">
											<select class="with-border" name="PAYIN_ACC" id="PAYIN_ACC">

												<option value="公司名称">公司名称</option>

												<option value="银行账号">银行账号</option>

											</select>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				</form>
			</div>
			<div class="tip-text margin-top-10">
				<span>*</span>汇款后24小时内反映到账号.
			</div>
			<div class="tc margin-top-30">
				<a href="javascript:" class="button ripple-effect big" onClick="fnDpst_I();">余额申请</a>
			</div>
		</div>


		<div class="col-xl-12">
			<div class="notify-box">
				<div class="switch-container">
					Total : 22
				</div>
			</div>



			<div class="dashboard-box bd0 margin-top-0 margin-bottom-20">

				<form method="POST" name="frmDpstL" id="frmDpstL">
					<input type="hidden" name="REQ_DVS_CD" id="REQ_DVS_CD" value="1">
					<input type="hidden" name="MEM_CODE" id="MEM_CODE" value="41">

				<div class="content">
					<ul class="dashboard-box-list">
						<li class="ntc-height ntc-title">
							<!--board-listing -->
							<div class="board-listing">
								<!-- board-listing-details -->
								<div class="board-listing-details">
									<!-- Details -->
									<div class="board-listing-description">
										<div class="list-no s_txt">No</div>
										<h3 class="board-listing-title">
											<strong>申请明细</strong>
										</h3>
										<!-- board-listing-footer -->
										<div class="board-listing-footer ntc fr">
											<ul class="fl">
												<li class="date"><span class="num s_txt">申请日期</span></li>
												<li class="date"><span class="num s_txt">汇款日期</span></li>
												<li><span class="num s_txt">状态</span></li>
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
										<div class="list-no s_txt">86</div>
										<h3 class="board-listing-title">银行账号
										<p>汇款人<strong class="fc_red num">￦100,000</strong></p></h3>
										<!-- board-listing-footer -->
										<div class="board-listing-footer ntc fr">
											<ul class="fl">
												<li class="date"><span class="num s_txt">2022-03-24</span></li>
												<li class="date"><span class="num s_txt">2022-03-24</span></li>
												<li>
													<span class="num s_txt">处理完成</span>

												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Task Details -->
						</li>









							<!--board-listing -->
							<div class="board-listing">
								<!-- board-listing-details -->
								<div class="board-listing-details">
									<!-- Details -->
									<div class="board-listing-description">
										<div class="list-no s_txt">86</div>
										<h3 class="board-listing-title">银行账号
										<p>汇款人<strong class="fc_red num">￦100,000</strong></p></h3>
										<!-- board-listing-footer -->
										<div class="board-listing-footer ntc fr">
											<ul class="fl">
												<li class="date"><span class="num s_txt">2022-03-24</span></li>
												<li class="date"><span class="num s_txt">2022-03-24</span></li>
												<li>
													<span class="num s_txt">处理完成</span>

												</li>
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
@endsection
