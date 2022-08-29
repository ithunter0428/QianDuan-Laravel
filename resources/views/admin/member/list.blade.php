@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/member/Mem_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">
<div id="mid-col">
	<div class="box">
		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员列表</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员管理 &gt; 会员列表</font></font></h4>
		</div>

        <div class="box-container corners02">
            <!-- Begin Search Form -->
			<div class="search-board">
				<form name="frmSearch" id="frmSearch" method="get">
					<input type="hidden" name="gMnu1" id="gMnu1" value="102">
					<input type="hidden" name="gMnu2" id="gMnu2" value="10201">
					<input type="hidden" name="sGo" id="sGo" value="{{ $page_number }}">
					<input type="hidden" name="sDelYn" id="sDelYn" value="N">

                    <table cellspacing="1">
                        <tbody>
                            <tr>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员等级</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员名称</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">邮箱号码</font></font></th>
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
                                <td>
                                    <select name="sGradeNo">
                                        <option value="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">= 选择</font></font></option>
                                        @foreach ([1, 2, 3, 4, 5] as $i)
                                        <option value="{{ $i }}" {{ $filter_grade == $i ? "selected" : '' }}><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $i }}级</font></font></option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="sMemId" id="sMemId" maxlength="100" class="iptBox1 EnterKey" style="width:100px;" value="{{ $filter_user_id }}">
                                </td>
                                <td>
                                    <input type="text" name="sMemNm" id="sMemNm" maxlength="40" class="iptBox1 EnterKey" style="width:80px;" value="{{ $filter_name }}">
                                </td>
                                <td>
                                    <input type="text" name="sPostNo" id="sPostNo" maxlength="20" class="iptBox1 EnterKey" style="width:80px;" value="{{ $filter_mailbox_number }}">
                                </td>
                                <td>
                                    <div class="">
                                        <span class="whGraBtn_bg ty2"><button type="button" class="txt" onClick="fnSearch('frmSearch', '1');"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">搜索</font></font></button></span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
				</form>
			</div>
            <!-- End Search Form -->

			<div class="notice-board">
				<form name="frmList" id="frmList" method="post">
					<input type="hidden" name="gMnu1" id="gMnu1" value="102">
					<input type="hidden" name="gMnu2" id="gMnu2" value="10201">

                    <table border="1">
                        <colgroup>
                            <col width="6%">
                            <col width="11%">
                            <col width="15%">
                            <col width="11%">
                            <col width="8%">
                            <col width="7%">
                            <col width="9%">
                            <col width="9%">
                            <col width="*">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th><label><input type="checkbox" name="ckMEM_CODE_ALL" value="Y" onClick="fnCkBoxAllSel('frmList', 'ckMEM_CODE_ALL', 'ckMEM_CODE');"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员代码</font></font></label></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员名称</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ID</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">邮箱号码</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">手机号码</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">预付款 (￦)</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">上次访问日期</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册日期</font></font></th>
                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
                            </tr>

                            @foreach ($users as $user)
                            <tr>
                                <td class="alCenter">
                                    <label class=""><input type="checkbox" name="ckMEM_CODE" value="{{ $user->id }}">
                                        <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $user->id }}</font></font></span>
                                    </label>
                                </td>
                                <td class="alCenter">
                                    <font style="vertical-align: inherit;">[Level {{ $user->grade }}]</font>
                                    <a onclick="fnView({{ $user->id }})" memcode="{{ $user->id }}" class="tipMem" data-hasqtip="3">
                                        <span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $user->name }} </font></font></span>
                                    </a>
                                </td>
                                <td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $user->user_id }}</font></font></span></td>
                                <td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $user->mailbox_number }}</font></font></span></td>
                                <td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $user->cellphone_number }}</font></font></span></td>
                                <td class="alCenter"><span class="bold red1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $user->advance_payment }}</font></font></span></td>
                                <td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $user->last_visited_at }}</font></font></span></td>
                                <td class="alCenter"><span class="grey1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $user->created_at }}</font></font></span></td>
                                <td class="listBtn">
                                    <span class="whGraBtn ty2">
                                        <button type="button" class="txt" onClick="fnPopWinCT(&#39;./Mem_W.asp?sKind=M&amp;sMemCode=341&#39;, &#39;Mem_W&#39;, 1000, 700);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button>
                                    </span>
                                    <span class="whRedBtn ty2">
                                        <button type="button" class="txt" onClick="fnOut_M(&#39;341&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注销</font></font></button>
                                    </span>
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

<div id="view_modal" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            Detail View
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

                        <tbody><tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">标题</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" name="SBJ" maxlength="80" value="">
                            </td>
                        </tr>

                        <tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">文字内容</font></font></th>
                            <td colspan="3"><textarea style="width:30%;height:100px;padding:10px;" name="CONT" id="CONT" maxlength="400" onkeyup="chkStrByte();"></textarea></td>
                        </tr>
                        <tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">字节</font></font></th>
                            <td><input type="text" class="iptBox1" name="SMS_BYTE" id="SMS_BYTE" value="43" maxlength="3" style="border:0;width:20px;" readonly=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">字节</font></font></td>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用与否</font></font></th>
                            <td>
                                <select name="USE_YN" id="USE_YN">
                                    <option value="Y" selected="">使用</option>
                                    <option value="N">未使用</option>
                                </select>
                            </td>
                        </tr>

                    </tbody></table>
                </form>
            </div>

            <div class="modal-footer">
                <div class="btn-area alCenter">
                    <span class="whGraBtn_bg ty2">
                        <button type="button" class="txt" onclick="fnSave()"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Save</font></font></button>
                    </span>
                    <span class="whGraBtn ty2">
                        <button type="button" class="txt" onclick="fnViewModalClose()" data-dismiss="modal" aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Close</font></font></button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="BtmSolution">
    <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font><a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> </font></font></a></h3>
</div>
</div>
<!-- body content end-->
@endsection
