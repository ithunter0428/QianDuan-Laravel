@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/announcement/Bbs_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">
	<div class="box" style="width:70%;">
		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">公告</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">公告管理 &gt; 通知</font></font></h4>
		</div>
		<div class="box-container corners02">
			<div class="search-board">
				<form name="frmSearch" id="frmSearch" method="get">
					<input type="hidden" name="gMnu1" value="104">
					<input type="hidden" name="gMnu2" value="10402">
					<input type="hidden" name="sGo" value="{{ $page_number }}">
					<input type="hidden" name="sBbCode" value="1">
					<input type="hidden" name="sStateNm" value="">
					<table cellspacing="1">
						<tbody>
							<tr>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页</font></font></th>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期</font></font></th>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员名称</font></font></th>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">标题</font></font></th>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">内容</font></font></th>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">文章编号</font></font></th>
								<th></th>
							</tr>
							<tr>
								<td>
									<select name="sPageSize" id="sPageSize">
                                        @foreach ([5, 10, 15, 20, 25, 30, 35, 40, 45, 50] as $i)
                                        <option value="{{ $i }}" {{ $page_size == $i ? "selected" : '' }}><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $i }}</font></font></option>
                                        @endforeach
                                    </select>
								</td>
								<td>
									<input type="text" name="sBeginDt" maxlength="10" class="iptBox1 dtPic hasDatepicker" readonly="" style="cursor:pointer;width:80px;" value="" id="dp1653530432165"><img src="./n-3_files/dt_close.png" class="cursor DtCan" rel="sBeginDt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">~
									</font></font><input type="text" name="sEndDt" maxlength="10" class="iptBox1 dtPic hasDatepicker" readonly="" style="cursor:pointer;width:80px;" value="" id="dp1653530432166"><img src="./n-3_files/dt_close.png" class="cursor DtCan" rel="sEndDt">
								</td>
								<td>
									<input type="text" name="sMemNm" id="sMemNm" maxlength="40" class="iptBox1 EnterKey" style="width:80px;" value="{{ $filter_name }}">
                                </td>
								<td>
									<input type="text" name="sSbj" id="sSbj" maxlength="100" class="iptBox1 EnterKey" style="width:80px;" value="{{ $filter_subject }}">
								</td>
								<td>
									<input type="text" name="sCont" id="sCont" maxlength="100" class="iptBox1 EnterKey" style="width:80px;" value="{{ $filter_content }}">
								</td>
								<td>
									<input type="text" name="sId" id="sId" maxlength="7" class="iptBox1 EnterKey" onblur="this.value=fnNumChk(this.value);" style="width:80px;" value="{{ $filter_id }}">
								</td>
								<td>
									<div class="">
										<span class="whGraBtn_bg ty2"><button type="button" class="txt" onClick="fnSearch('frmSearch', '1');"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索</font></font></button></span> &nbsp;
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
			<div class="notice-board">
				<form name="frmList" id="frmList" method="post">
					<input type="hidden" name="gMnu1" id="gMnu1" value="104">
					<input type="hidden" name="gMnu2" id="gMnu2" value="10402">
					<table border="1">
						<colgroup>
							<col width="5%">
							<col width="*">
							<col width="9%">
							<col width="6%">
							<col width="12%">
						</colgroup>
						<tbody>
							<tr>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">No</font></font></th>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">标题</font></font></th>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID名称</font></font></th>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">浏览数</font></font></th>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期</font></font></th>
							</tr>
							@foreach ($results as $item)
							<tr>
								<td class="ntc alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $item['id'] }}</font></font></span></td>
								<td class="ntc alLeft padL1 vm_box">
									<a href="javascript:" onclick="fnView_S(`{{ json_encode(array($item)) }}`);" class="Black">
										<font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $item['title'] }}</font></font>
									</a>
								</td>
								<td class="ntc alCenter">
									<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $item['creator'] }}</font></font></span>
								</td>
								<td class="ntc alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $item['view_count'] }}</font></font></span></td>
								<td class="ntc alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $item['created_at'] }}</font></font></span></td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</form>
			</div>
			<div class="pagDv">
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
<div id="view_modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				公告
			</div>
            <div class="modal-body">
                <form method="post" name="frmSmsCont" id="frmSmsCont">
                    <input type="hidden" name="sKind" value="M">
                    <input type="hidden" name="SMS_SEQ" value="11">
                    <input type="hidden" name="STATE_SEQ" value="0">

                    <table class="order_write order_table_top">
                        <colgroup>
                            <col width="15%">
                            <col width="35%">
                            <col width="15%">
                            <col width="35%">
                        </colgroup>

                        <tbody>
							<tr>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">标题</font></font></th>
								<td colspan="3">
									<span id="modal_title"></span>
								</td>
							</tr>
							<tr>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID名称</font></font></th>
								<td>
									<span id="modal_creator"></span>
								</td>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期</font></font></th>
								<td>
									<span id="modal_created_at"></span>
								</td>
							</tr>
							<tr>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">浏览数</font></font></th>
								<td colspan="3">
									<span id="modal_view_count"></span>
								</td>
							</tr>
							<tr>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">内容</font></font></th>
								<td colspan="3">
									<span id="modal_content"></span>
								</td>
							</tr>
	                    </tbody>
					</table>
                </form>
            </div>

            <div class="modal-footer">
                <div class="btn-area alCenter">
                    <span class="whGraBtn ty2">
                        <button type="button" class="txt" onclick="fnViewModalClose()" data-dismiss="modal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Close</font></font></button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
