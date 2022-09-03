@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/environment/Center_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">
	<div class="box">
		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">区域管理</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">首选项 &gt; 区域管理</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->


			<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnEdit();"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中心注册</font></font></button></span>
			<span class="whGrnBtn ty2"><button type="button" class="txt" onclick=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">居中对齐</font></font></button></span>

			<p class="clrBoth pHt10"></p>

			<div class="notice-board">

				<table border="0">
				<colgroup>
				<col width="12%">
				<col width="10%">
				<col width="8%">
				<col width="8%">
				<col width="10%">
				<col width="*">
				<col width="12%">
				<col width="6%">
				<col width="6%">
				<col width="8%">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国家</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">区域</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">区域代码</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测量单位</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发货方式</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">地址</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">电话号码</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航运中心</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
				</tr>

				@foreach ($data as $row)
				<tr>
					<td>
						<img src="./set2_files/Nation_CN_20180803zhbd46.png">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $row->country }}</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(3)

					</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $row->city }}</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(5)</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $row->zipcode }}</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $row->measurement_unit }}</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $row->shipping_method }}</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $row->address }}</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $row->phone }}</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $row->shipping_center }}</font></font><br></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $row->status? '使用': '' }}</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnEdit(`{{ json_encode(array($row)) }}`)"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel({{ $row->id }});"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr>
				@endforeach

				<!-- <tr>
					<td>
						<img src="./set2_files/Nation_CN_20180803zhbd46.png">
						<span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中国</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(3)

					</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">对于</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(5)</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">WH</font></font></span></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">公斤</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">空运、海运</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">264414, 山东省威海市, 9 Fukuju Rd., 环翠区苘山镇</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01055487848</font></font></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航运中心</font></font><br></td>
					<td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>
						<span class="whRedBtn ty2"><button type="button" class="txt" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
					</td>
				</tr> -->

				</tbody></table>
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
				区域管理
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
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">国家</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_country" maxlength="80" value="">
                            </td>
                        </tr>

						<tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">区域</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_city" maxlength="80" value="">
                            </td>
                        </tr>

						<tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">区域代码</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_zipcode" maxlength="80" value="">
                            </td>
                        </tr>

						<tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">测量单位</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_measurement_unit" maxlength="80" value="">
                            </td>
                        </tr>

						<tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发货方式</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_shipping_method" maxlength="80" value="">
                            </td>
                        </tr>

						<tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">地址</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_address" maxlength="80" value="">
                            </td>
                        </tr>
						<tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">电话号码</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_phone" maxlength="80" value="">
                            </td>
                        </tr>
						<tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">航运中心</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_shipping_center" maxlength="80" value="">
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
