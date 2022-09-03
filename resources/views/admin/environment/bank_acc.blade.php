@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/environment/BankAcc_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">
	<div class="box">
		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">存款账户管理</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">环境设置 &gt; 存款账户管理</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->


			<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnEdit();"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">存款账户注册</font></font></button></span>

			<p class="clrBoth pHt10"></p>


			<div class="notice-board">


			<form name="frmSearch" id="frmSearch" method="get">
				<input type="hidden" name="gMnu1" id="gMnu1" value="108">
				<input type="hidden" name="gMnu2" id="gMnu2" value="10806">

				<table border="1">
				<colgroup>
				<col width="6%">
				<col width="10%">
				<col width="15%">
				<col width="10%">
				<col width="10%">
				<col width="*">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">转动</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">银行名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">帐号</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">账户持有人</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>

				</tr>

				@foreach ($data as $row)
				<tr>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $row->round }}</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $row->bank_name }}</font></font></span></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $row->account_number }}</font></font></span></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $row->account_owner }}</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $row->status? '使用': '' }}</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnEdit(`{{ json_encode(array($row)) }}`)"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2">
							<button type="button" class="txt" onclick="fnDel({{ $row->id }});"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button>
						</span>
					</td>
				</tr>
				@endforeach

				</tbody></table>

				</form>

			</div>

		</div>


	</div>

</div>

		</div>
		<div class="BtmSolution">
			<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font><a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> </font></font></a></h3>
		</div>
	</div>


<div id="edit_modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header" id='edit_modal_header'>
				存款账户
			</div>
            <div class="modal-body">
                <form method="post" name="frmSmsCont" id="frmSmsCont">
					<table class="order_write order_table_top">
                        <colgroup>
                            <col width="20%">
                            <col width="80%">
                        </colgroup>

                        <tbody>
						<tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">转动</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_round" maxlength="80" value="">
                            </td>
                        </tr>

						<tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">银行名称</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_bank_name" maxlength="80" value="">
                            </td>
                        </tr>

						<tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">帐号</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_account_number" maxlength="80" value="">
                            </td>
                        </tr>

						<tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">账户持有人</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_account_owner" maxlength="80" value="">
                            </td>
                        </tr>

                        <tr>
							<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用</font></font></th>
                            <td>
								<select id="modal_status">
									<option value="1" selected="">使用</option>
									<option value="0">未使用</option>
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
                        <button type="button" class="txt" onclick="fnEditModalClose()" data-dismiss="modal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Close</font></font></button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
