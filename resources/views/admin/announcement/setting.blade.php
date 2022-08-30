@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/announcement/BbSet_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">
<div id="mid-col">
	<div class="box">
		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">公告设置</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">布告栏管理 &gt; 公告设置</font></font></h4>
		</div>
		<div class="box-container corners02">
			<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./BbSet_W.asp?sKind=A&#39;, &#39;BbSet_W&#39;, 1100, 800);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">布告栏确认</font></font></button></span>
			<p class="clrBoth pHt10"></p>
			<div class="notice-board">
				<table border="0">
					<colgroup>
						<col width="12%">
						<col width="6%">
						<col width="6%">
						<col width="6%">
						<col width="6%">
						<col width="6%">
						<col width="6%">
						<col width="6%">
						<col width="6%">
						<col width="6%">
						<col width="6%">
						<col width="*">
					</colgroup>
				<tbody>
					<tr>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">布告栏ID名称</font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">类型</font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用密码</font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用标题</font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用状态</font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否写权限</font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否查看</font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">评论权限</font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">页数</font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">通知数量</font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用</font></font></th>
						<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
					</tr>
					@foreach ($settings as $setting)
					<tr>
						<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $setting->board_name }}</font></font></span></td>
						<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $setting->type }}</font></font></span></td>
						<td class="alCenter"><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $setting->use_password ? '' : '未' }}使用</font></font></span></td>
						<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $setting->use_title ? '' : '未' }}使用</font></font></span></td>
						<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $setting->use_state ? '' : '未' }}使用</font></font></span></td>
						<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $setting->write_permission ? '' : '未' }}使用</font></font></span></td>
						<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $setting->view_all ? '全部' : '仅限会员' }}</font></font></span></td>
						<td class="alCenter"><span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $setting->comment_permission ? '' : '未' }}使用</font></font></span></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $setting->page_count }}</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $setting->notification_count }}</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $setting->is_using ? '' : '未' }}使用</font></font></td>
						<td class="listBtn">
							<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnEdit(`{{ json_encode(array($setting)) }}`)">
								<font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button>
							</span>
							<!-- <span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel_M(&#39;2&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span> -->
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
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
			<div class="modal-header">
				編輯公告设置
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
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">布告栏ID名称</font></font></th>
								<td>
									<span id="modal_name"></span>
								</td>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">类型</font></font></th>
								<td>
									<span id="modal_type"></span>
								</td>
							</tr>
							<tr>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用密码</font></font></th>
								<td>
									<select name="USE_YN" id="modal_use_password">
										<option value="1" selected="">使用</option>
										<option value="0">未使用</option>
									</select>
								</td>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用标题</font></font></th>
								<td>
									<select name="USE_YN" id="modal_use_title">
										<option value="1" selected="">使用</option>
										<option value="0">未使用</option>
									</select>
								</td>
							</tr>
							<tr>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用状态</font></font></th>
								<td>
									<select name="USE_YN" id="modal_use_state">
										<option value="1" selected="">使用</option>
										<option value="0">未使用</option>
									</select>
								</td>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否写权限</font></font></th>
								<td>
									<select name="USE_YN" id="modal_write_permission">
										<option value="1" selected="">使用</option>
										<option value="0">未使用</option>
									</select>
								</td>
							</tr>
							<tr>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否查看</font></font></th>
								<td>
									<select name="USE_YN" id="modal_view_all">
										<option value="1" selected="">全部</option>
										<option value="0">仅限会员</option>
									</select>
								</td>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">评论权限</font></font></th>
								<td>
									<select name="USE_YN" id="modal_comment_permission">
										<option value="1" selected="">使用</option>
										<option value="0">未使用</option>
									</select>
								</td>
							</tr>
							<tr>
								<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用</font></font></th>
								<td span="3">
									<select name="USE_YN" id="modal_is_using">
										<option value="1" selected="">使用</option>
										<option value="0">未使用</option>
									</select>
								</td>
							</tr>
	                    </tbody>
					</table>
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
