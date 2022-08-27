@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/member/DepositReq_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">
<div id="mid-col">
	<div class="box">
		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">存款申请详情</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员管理 &gt; 入金申请详情</font></font></h4>
		</div>

		<!-- B: Box -->
		<div class="box-container corners02">
			<div class="search-board">
				<form name="frmSearch" id="frmSearch" method="get">
					<input type="hidden" name="gMnu1" id="gMnu1" value="102">
					<input type="hidden" name="gMnu2" id="gMnu2" value="10203">
					<input type="hidden" name="sGo" id="sGo" value="1">

				    <table cellspacing="1">
				        <tbody>
                            <tr>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">应用类别</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成与否</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">申请编号</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员名称</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">汇款人（存款人）</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">帐号</font></font></th>
                                <th></th>
				            </tr>
                            <tr>
                                <td>
                                    <select name="sPageSize" id="sPageSize">
                                        <option value="10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></option>
                                        <option value="15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></option>
                                        <option value="20" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></option>
                                        <option value="25"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25</font></font></option>
                                        <option value="30"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30</font></font></option>
                                        <option value="35"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">35</font></font></option>
                                        <option value="40"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">40</font></font></option>
                                        <option value="45"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">45</font></font></option>
                                        <option value="50"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50</font></font></option>
                                    </select>
					            </td>
					            <td>
                                    <input type="text" name="sBeginDt" id="sBeginDt" maxlength="10" class="iptBox1 dtPic" readonly style="cursor:pointer;width:80px;" value="{{ $filter_from_date }}"><img src="{{ asset('/admin_files/layout/dt_close.png') }}" class="cursor DtCan" rel="sBeginDt">
                                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">~</font></font>
                                    <input type="text" name="sEndDt" id="sEndDt" maxlength="10" class="iptBox1 dtPic" readonly style="cursor:pointer;width:80px;" value="{{ $filter_from_date }}"><img src="{{ asset('/admin_files/layout/dt_close.png') }}" class="cursor DtCan" rel="sEndDt">
                                </td>
                                <td>
                                    <select name="sReqDvsCode">
                                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>
                                        <option value="Application" {{ $filter_application_category == 'Application' ? 'selected' : '' }}><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">申请</font></font></option>
                                        <option value="Refund" {{ $filter_application_category == 'Refund' ? 'selected' : '' }}><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退款</font></font></option>
                                    </select>
                                </td>
                                <td>
                                    <select name="sCompYn">
                                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>
                                        <option value="Application" {{ $filter_status == 'Application' ? 'selected' : '' }}><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">申请</font></font></option>
                                        <option value="Finish" {{ $filter_status == 'Finish' ? 'selected' : '' }}><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成</font></font></option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="sReqSeq" id="sReqSeq" maxlength="10" class="iptBox1 EnterKey" style="width:80px;" value="{{ $filter_application_number }}">
                                </td>
                                <td>
                                    <input type="text" name="sMemNm" id="sMemNm" maxlength="40" class="iptBox1 EnterKey" style="width:80px;" value="{{ $filter_member_name }}">
                                </td>
                                <td>
                                    <input type="text" name="sPayInNm" id="sPayInNm" maxlength="20" class="iptBox1 EnterKey" style="width:80px;" value="{{ $filter_remitter }}">
                                </td>
                                <td>
                                    <input type="text" name="sPayInAcc" id="sPayInAcc" maxlength="40" class="iptBox1 EnterKey" style="width:100px;" value="{{ $filter_account_number }}">
                                </td>
                                <td>
                                    <div class="">
                                        <span class="whGraBtn_bg ty2"><button type="button" class="txt" onClick="fnSearch(&#39;frmSearch&#39;, &#39;1&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索</font></font></button></span>
                                    </div>
                                </td>
				            </tr>
				        </tbody>
                    </table>
				</form>
				<!-- End 검색 폼 -->
			</div>

			<div class="notice-board">
				<form name="frmList" id="frmList" method="post">
					<input type="hidden" name="gMnu1" id="gMnu1" value="102">
					<input type="hidden" name="gMnu2" id="gMnu2" value="10203">

                    <table border="1">
                        <colgroup>
                        <col width="5%">
                        <col width="11%">
                        <col width="6%">
                        <col width="8%">
                        <col width="8%">
                        <col width="8%">
                        <col width="15%">
                        <col width="6%">
                        <col width="8%">
                        <col width="8%">
                        <col width="*">
                        </colgroup>
				        <tbody>
                            <tr>
                                <th><label><input type="checkbox" name="ckREQ_SEQ_ALL" value="Y" onClick="fnCkBoxAllSel(&#39;frmList&#39;, &#39;ckREQ_SEQ_ALL&#39;, &#39;ckREQ_SEQ&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No</font></font></label></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员名称</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">应用类别</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">预付款 (￦)</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退款(￦)</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">汇款人（存款人）</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">帐户信息</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成与否</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">预计汇款日期</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">申请日期</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
				            </tr>
                            @foreach ($list as $each)
				            <tr>
                                <td class="alCenter">
                                    <label class="">
                                        @if ($each->status == 'Application')
                                        <input type="checkbox" name="ckREQ_SEQ" value="{{ $each->id }}">
                                        @endif
                                        <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $each->id }}</font></font></span>
                                    </label>
                                </td>
                                <td class="alCenter">
                                    <a href="javascript:" memcode="{{ $each->member_id }}" class="tipMem" data-hasqtip="0">
                                        <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测试</font></font></span>
                                    </a>
                                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> ({{ $each->balance }}) </font></font>
                                </td>
                                <td class="alCenter"><span class="red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $each->application_category }}</font></font></span></td>
                                <td class="alCenter">
                                    @if ($each->advance_payment > 0)
                                    <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $each->advance_payment }}</font></font></span></td>
                                    @endif
                                <td class="alCenter">
                                    @if ($each->refund > 0)
                                    <span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $each->refund }}</font></font></span></td>
                                    @endif
                                <td class="alCenter">
                                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $each->remitter }}</font></font>
                                </td>
                                <td class="alCenter">
                                    <span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $each->account_information }}</font></font></span>
                                </td>
                                <td class="alCenter">
                                    @if ($each->status == 'Application')
                                    <span class="clrBlue1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">申请</font></font></span>
                                    @elseif ($each->status == 'Finish')
                                    <span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成</font></font></span>
                                    @endif
                                </td>
                                <td class="alCenter">
                                    <span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $each->remittance_date }}</font></font></font></font></span>
                                </td>
                                <td class="alCenter">
                                    <span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022-05-09 16:36</font></font></span>
                                </td>
                                <td class="listBtn">
                                    @if ($each->status == 'Application')
                                    <span class="whGraBtn">
                                        <button type="button" class="txt" onClick="fnCompYes(&#39;88&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完成</font></font></button>
                                    </span>
                                    <span class="whRedBtn">
                                        <button type="button" class="txt" onClick="fnCompDel(&#39;88&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消</font></font></button>
                                    </span>
                                    @endif
                                </td>
				            </tr>
                            @endforeach
                        </tbody>
                    </table>
				</form>
			</div>

			<div class="pagDv">
				<div class="Status-change">
					<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnCompYnAll_M('Y');"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Finish</font></font></font></font></button></span>&nbsp;
					<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnCompYnAll_M('D');"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">delete</font></font></font></font></button></span>
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
		<!-- E: Box -->
	</div>
</div>
</div>
<div class="BtmSolution">
    <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font><a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> </font></font></a></h3>
</div>
</div>
<!-- body content end-->
@endsection
