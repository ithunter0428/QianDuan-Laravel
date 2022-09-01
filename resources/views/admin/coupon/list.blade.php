@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/coupon/Coupon_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
	<div class="body-content left-M-0">
		<div class="conBox">

<link rel="stylesheet" type="text/css" href="./cop_files/jquery.qtip.min.css">
<script type="text/javascript" src="./cop_files/jquery.qtip.min.js.下载"></script>

		<div id="mid-col">

			<div class="box">

				<div class="nTitle">
					<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">优惠券列表</font></font></h2>
					<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">优惠券管理 &gt; 优惠券列表</font></font></h4>
				</div>
				<div class="box-container corners02"><!-- Begin 검색 폼 -->

					<div class="search-board">

						<form name="frmSearch" id="frmSearch" method="get">
							<input type="hidden" name="gMnu1" id="gMnu1" value="106">
							<input type="hidden" name="gMnu2" id="gMnu2" value="10601">
							<input type="hidden" name="sGo" id="sGo" value="1">

							<table cellspacing="1">
							<tbody>
							<tr>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页</font></font></th>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期</font></font></th>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">可用性</font></font></th>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发行分类</font></font></th>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">优惠券类型</font></font></th>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员名称</font></font></th>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员ID</font></font></th>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">邮箱号码</font></font></th>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号</font></font></th>
								<th></th>
							</tr>
							<tr>
							<td>
                                    <select name="sPageSize" id="sPageSize">
                                        @foreach ([10, 15, 20, 25, 30, 35, 40, 45, 50] as $i)
                                        <option value="{{ $i }}" {{ $page_size == $i ? "selected" : '' }}><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $i }}</font></font></option>
                                        @endforeach
                                    </select>
                                </td>
								<!-- <td>
									<input type="text" name="sBeginDt" id="sBeginDt" maxlength="10" class="iptBox1 dtPic hasDatepicker" readonly style="cursor:pointer;width:80px;" value=""><img src="./cop_files/dt_close.png" class="cursor DtCan" rel="sBeginDt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">~
									</font></font><input type="text" name="sEndDt" id="sEndDt" maxlength="10" class="iptBox1 dtPic hasDatepicker" readonly style="cursor:pointer;width:80px;" value=""><img src="./cop_files/dt_close.png" class="cursor DtCan" rel="sEndDt">
								</td> -->
								<td>
									<input type="text" name="BEGIN_DT" maxlength="10" class="iptBox1 dtPic" readonly style="cursor:pointer;width:80px;" value="{{$BEGIN_DT}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">~
									</font></font><input type="text" name="END_DT" maxlength="10" class="iptBox1 dtPic" readonly style="cursor:pointer;width:80px;" value="{{$END_DT}}">
								</td>
								<td>
									<select name="sUsePsbYn" value="{{$sUsePsbYn}}">
										<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>
										<option value="Y" {{ $sUsePsbYn == "Y" ? "selected" : "" }}><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">可以使用</font></font></option>
										<option value="N" {{ $sUsePsbYn == "N" ? "selected" : "" }}><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">不能使用</font></font></option>
									</select>
								</td>
								<td>
									<select name="sIssueDvsCd" value="{{ $sIssueDvsCd }}">
										<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>
											<option value="1" {{ $sIssueDvsCd == "1" ? "selected" : "" }}><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员注册活动</font></font></option>

											<option value="3" {{ $sIssueDvsCd == "3" ? "selected" : "" }}><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">由经理签发</font></font></option>

											<option value="4" {{ $sIssueDvsCd == "4" ? "selected" : "" }}><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发放会员优惠券</font></font></option>

									</select>
								</td>
								<td>
									<select name="sChargeDetCd" value="{{ $sChargeDetCd }}">
										<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>

											<option value="1" {{ $sChargeDetCd == "1" ? "selected" : "" }}><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运输费</font></font></option>

									</select>
								</td>
								<td>
									<input type="text" name="sMemNm" id="sMemNm" maxlength="40" class="iptBox1 EnterKey" style="width:80px;" value="{{ $sMemNm }}">
								</td>
								<td>
									<input type="text" name="sMemId" id="sMemId" maxlength="100" class="iptBox1 EnterKey" style="width:120px;" value="{{ $sMemId }}">
								</td>
								<td>
									<input type="text" name="sPostNo" id="sPostNo" maxlength="20" class="iptBox1 EnterKey" style="width:80px;" value="">
								</td>
								<td>
									<input type="text" name="sOrderNo" id="sOrderNo" maxlength="8" class="iptBox1 EnterKey" style="width:80px;" value="">
								</td>

								<td>
									<div class="">
										<span class="whGraBtn_bg ty2"><button type="button" class="txt" onClick="fnSearch(&#39;frmSearch&#39;, &#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索</font></font></button></span> &nbsp;
										<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnOpenCouponModal()"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">为每位会员发放优惠券</font></font></button></span>
										<span class="whGraBtn ty2"><button type="button" class="txt" onClick="fnPopWinCT(&#39;./CouponGrade_W.asp&#39;, &#39;CouponGrade_W&#39;, 800, 350);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">按等级发行优惠券</font></font></button></span>
									</div>
								</td>
							</tr>
							</tbody></table>

						</form>
						<!-- End 검색 폼 -->

					</div>


					<div class="notice-board">

						<form name="frmList" id="frmList" method="post">
							<input type="hidden" name="gMnu1" id="gMnu1" value="106">
							<input type="hidden" name="gMnu2" id="gMnu2" value="10601">

							<table border="1">
								<colgroup>
								<col width="5%">
								<col width="15%">
								<col width="10%">
								<col width="11%">
								<col width="16%">
								<col width="8%">
								<col width="*">
								</colgroup>
								<tbody>
								<tr>
									<th class="alLeft padL1"><label><input type="checkbox" name="ckCOUPON_SEQ_ALL" value="Y" onClick="fnCkBoxAllSel(&#39;frmList&#39;, &#39;ckCOUPON_SEQ_ALL&#39;, &#39;ckCOUPON_SEQ&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No</font></font></label></th>
									<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">优惠券类型（发行分类）</font></font></th>
									<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">价格</font></font></th>
									<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">生效日期</font></font></th>
									<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">持有会员</font></font></th>
									<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用</font></font></th>
									<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发行日期</font></font></th>
								</tr>


								@foreach ($coupons as $coupon)
								<tr>
									<td class="alLeft padL1">

											<label class=""><input type="checkbox" name="ckCOUPON_SEQ" value="211">

										<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$loop->index + 1}}</font></font></span>
									</label></td>
									<?php $coupon_types = [ '1' => '运输费'] ?>
									<?php $issues = [ '1' => '会员注册活动', '3' => '由经理签发', '4' => '发放会员优惠券'] ?>

									<td class=""><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $coupon_types[$coupon->coupon_type] }}</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（{{$issues[$coupon->issue_category]}}）</font></font></td>
									<td class="alRight"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $coupon->currency_unit}}{{ $coupon->coupon_amount}}</font></font></span></td>
									<td class="alCenter"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									{{ Carbon\Carbon::parse($coupon['effective_st_date'])->format('yy-m-d') }}	~ {{ Carbon\Carbon::parse($coupon['effective_ed_date'])->format('yy-m-d') }}</font>
								
									</font></font></span></td>
									<td class="">
										<a href="javascript:" memcode="200" class="tipMem" data-hasqtip="0"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $coupon->member->name}}</font></font></span></a>
									</td>
									<td class="alCenter"><span class="">
										@if ($coupon->status == 'Y')
											<span class="bold clrBlue1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">可以使用</font></font></span>
										@else
											<span class="bold clrRed1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">不能使用</font></font></span>
										@endif
									</span></td>
									<td class="">
										<span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ Carbon\Carbon::parse($coupon['created_at'])->format('yy-m-d h:m') }}</font></font></span>

									</td>
								</tr>
								@endforeach


																							
								</tbody>
							</table>
						</form>
					</div>

					<div class="pagDv">
				<div class="Status-change">
                    <select name="GRADE_NO" class="vm">
                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择年级</font></font></option>
                        <option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1级</font></font></option>
                        <option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2级</font></font></option>
                        <option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3级</font></font></option>
                        <option value="4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4级</font></font></option>
                        <option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5级</font></font></option>
                    </select>
                    <span class="whGraBtn ty2 vm">
                        <button type="button" class="txt" onClick="fnGradeChg_M();"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">年级变化</font></font></button>
                    </span>
				</div>
                <div class="paging">
                    <span class="num">
                        <a href="javascript:" class="ArrowOff" onClick="fnSearch('frmSearch', {{ $page_number - 1 }});" title="没有前"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></a>
                        @for ($i = 1; $i <= $page_count; $i ++)
                        <a href="javascript:" class="{{ $i == $page_number ? 'on' : '' }}" onClick="fnSearch('frmSearch', {{ $i }});"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $i }}</font></font></a>
                        @endfor
                        <a href="javascript:" class="ArrowOff" onClick="fnSearch('frmSearch', {{ $page_number + 1 }});" title="没有下"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></a>
                    </span>
                </div>
                <div class="CntRt">
                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">总数</font></font>
                    <span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $total_count }}</font></font></span>
                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / 页</font></font>
                    <span class="go"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $page_number }}</font></font></span>
                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / 总数</font></font>
                    <span class="tt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $page_count }}</font></font></span>
                </div>
			</div>

				</div>


			</div>

		</div>


		</div>
		<div class="BtmSolution">
			<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font><a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> </font></font></a></h3>
		</div>
	</div>

<!-- Modal for Distribute Coupons to Members -->
<div id="distribute_coupon_modal" class="modal fade" style="max-width: 800px;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				編輯公告设置
			</div>
			<div class="modal-body">
				<form method="post" name="frmSmsCont" id="frmSmsCont">
					<input type="hidden" name="sKind" value="M">
					<input type="hidden" name="SMS_SEQ" value="11">
					<input type="hidden" name="STATE_SEQ" value="0">
					<!-- Radio Button for selecting coupon type -->
					<div style="display: flex; padding-top: 15px">
						<div>
							<input type="radio" value="all" name="coupon_radio" checked>
							<label for="all">To All User</label>
						</div>
						<div style="margin-left: 20px">
							<input type="radio" value="one" name="coupon_radio">
							<label for="one">Only One User</label>
						</div>
					</div>
					<table class="order_write order_table_top" style="margin-bottom:20px;">
						<colgroup>
							<col width="15%">
							<col width="35%">
							<col width="15%">
							<col width="35%">
						</colgroup>

						<tbody>

							<tr>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期</font></font></th>
								<td>
									<input type="text" name="BEGIN_DT" maxlength="10" class="iptBox1 dtPic" readonly style="cursor:pointer;width:80px;" value="">
								</td>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期</font></font></th>
								<td>
									<input type="text" name="END_DT" maxlength="10" class="iptBox1 dtPic" readonly style="cursor:pointer;width:80px;" value="">
								</td>
							</tr>
							<tr>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">可用性</font></font></th>
								<td>
									<select name="sUsePsbYn">
										<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>
										<option value="Y" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">可以使用</font></font></option>
										<option value="N"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">不能使用</font></font></option>
									</select>
								</td>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发行分类</font></font></th>
								<td>
									<select name="sIssueDvsCd">
										<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>

											<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员注册活动</font></font></option>

											<option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">由经理签发</font></font></option>

											<option value="4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发放会员优惠券</font></font></option>

									</select>
								</td>
							</tr>
							<tr>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">单位</font></font></th>
								<td>
									<select name="sCrUnit">
										<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>

											<option value="￦"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">￦</font></font></option>

									</select>
								</td>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">金额</font></font></th>
								<td>
									<input type="text" name="sMny" id="sMny" maxlength="40" class="iptBox1 EnterKey" style="width:80px;" value="">

								</td>
							</tr>
							<tr>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">优惠券类型</font></font></th>
								<td>
									<select name="sChargeDetCd">
										<option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>

											<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运输费</font></font></option>

									</select>
								</td>
					
							</tr>
						</tbody>
					</table>
					<div id="sMemberPan" style="display:none">
						<div class="search-board">
							<table cellspacing="1">
								<tbody>
									<tr>
										<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员等级</font></font></th>
										<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID</font></font></th>
										<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员名称</font></font></th>
										<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">邮箱号码</font></font></th>
										<th></th>
									</tr>
									<tr>
							
										<td>
											<select name="sGradeNo" id="tGradeNo">
												<option value="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>
												@foreach ([1, 2, 3, 4, 5] as $i)
												<option value="{{ $i }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $i }}级</font></font></option>
												@endforeach
											</select>
										</td>
										<td>
											<input type="text" name="sMemId" id="tMemId" maxlength="100" class="iptBox1 EnterKey" style="width:100px;" value="">
										</td>
										<td>
											<input type="text" name="sMemNm" id="tMemNm" maxlength="40" class="iptBox1 EnterKey" style="width:80px;" value="">
										</td>
										<td>
											<input type="text" name="sPostNo" id="tPostNo" maxlength="20" class="iptBox1 EnterKey" style="width:80px;" value="">
										</td>
										<td>
											<div class="">
												<span class="whGraBtn_bg ty2"><button type="button" class="txt" onClick="fnMemberSearch()"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索</font></font></button></span>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- Member Table -->
						<div style="height: 350px; overflow: auto">
							<table border="1" id="member_table">
								<colgroup>
									<col width="6%">
									<col width="11%">
									<col width="15%">
									<col width="11%">
									<col width="8%">
									<col width="7%">
									<col width="9%">
								</colgroup>
								<thead>
									<tr>
										<th><label><input type="checkbox" name="ckMEM_CODE_ALL" value="Y" onClick="fnCkBoxAllSel('frmList', 'ckMEM_CODE_ALL', 'ckMEM_CODE');"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员代码</font></font></label></th>
										<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员名称</font></font></th>
										<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID</font></font></th>
										<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">邮箱号码</font></font></th>
										<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">手机号码</font></font></th>
										<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">预付款 (￦)</font></font></th>
										<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">上次访问日期</font></font></th>
									</tr>	
								</thead>
								<tbody>
								</tbody>
							</table>
						</div>
					</div>
				</form>
			</div>

			<div class="modal-footer">
				<div class="btn-area alCenter">
					<span class="whGraBtn_bg ty2">
						<button type="button" class="txt" onclick="fnSave()"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Save</font></font></button>
					</span>
					<span class="whGraBtn ty2">
						<button type="button" class="txt" onclick="fnEditModalClose()" data-dismiss="modal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Close</font></font></button>
					</span>
				</div>
			</div>
		</div>
	</div>
</div>	
@endsection
