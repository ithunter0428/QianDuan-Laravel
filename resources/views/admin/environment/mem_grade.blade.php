@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/environment/MemGrade_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">
	<div class="box">
		<div class="nTitle">
			<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员等级管理</font></font></h2>
			<h4 class="white corners"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">首选项 &gt; 会员级别管理</font></font></h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->
			<span class="whGraBtn ty2"><button type="button" class="txt"  onclick="fnEdit()"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">会员等级注册</font></font></button></span>
			<p class="clrBoth pHt10"></p>
			<div class="notice-board">
				<table border="0">
				<colgroup>
				<col width="5%">
				<col width="10%">
				<col width="10%">
				<col width="10%">
				<col width="12%">
				<col width="8%">
				<col width="6%">
				<col width="*">
				</colgroup>
				<tbody><tr>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">年级数</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">等级名称</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发送数量</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买手续费(%)</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">最新优惠券</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">积分(%)</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">是否使用</font></font></th>
					<th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></th>
				</tr>

				@foreach ($data as $row)
					<tr>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $row->grade }}</font></font></td>
						<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $row->name }}级</font></font></span></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $row->send_amount_from }}到{{ $row->send_amount_to }}</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $row->purchase_fee }}%</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
							￦{{ $row->coupon_value }} / {{ $row->coupon_delivery_count }} 件
						</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $row->integral }}%</font></font></td>
						<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $row->status? '使用': '' }}</font></font></td>
						<td class="listBtn">
							<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnEdit(`{{ json_encode(array($row)) }}`)">
								<font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button>
							</span>
							<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel({{ $row->id }});"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>
						</td>
					</tr>
				@endforeach

				<!-- <tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2级</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2 到 20</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9%</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						￦1000 / 1 件
					</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./MemGrade_W.asp?sKind=M&amp;sGradeNo=2&#39;, &#39;MemGrade_W&#39;, 900, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>

							<span class="whRedBtn ty2"><button type="button" class="txt" onclick="alert(&#39;시스템관리자에게 요청하십시오.&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>

					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3级</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">61 至 90</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8%</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						￦2000 / 1 件
					</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./MemGrade_W.asp?sKind=M&amp;sGradeNo=3&#39;, &#39;MemGrade_W&#39;, 900, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>

							<span class="whRedBtn ty2"><button type="button" class="txt" onclick="alert(&#39;시스템관리자에게 요청하십시오.&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>

					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4级</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">91 至 120</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7%</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						￦2000 / 2 件
					</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./MemGrade_W.asp?sKind=M&amp;sGradeNo=4&#39;, &#39;MemGrade_W&#39;, 900, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>

							<span class="whRedBtn ty2"><button type="button" class="txt" onclick="alert(&#39;시스템관리자에게 요청하십시오.&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>

					</td>
				</tr>

				<tr>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></td>
					<td><span class="bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5级</font></font></span></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">121 至 999999</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5%</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						￦2000 / 3 件
					</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></td>
					<td class="alCenter"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">使用</font></font></td>
					<td class="listBtn">
						<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./MemGrade_W.asp?sKind=M&amp;sGradeNo=5&#39;, &#39;MemGrade_W&#39;, 900, 300);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改</font></font></button></span>

							<span class="whRedBtn ty2"><button type="button" class="txt" onclick="alert(&#39;시스템관리자에게 요청하십시오.&#39;);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">删除</font></font></button></span>

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
			<div class="modal-header">
				会员等级设置
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
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">年级数</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_grade" maxlength="80" value="">
                            </td>
                        </tr>

						<tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">等级名称</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_name" maxlength="80" value="">
                            </td>
                        </tr>

						<tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发送数量(从)</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_send_amount_from" maxlength="80" value="">
                            </td>
                        </tr>

						<tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发送数量(至)</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_send_amount_to" maxlength="80" value="">
                            </td>
                        </tr>

						<tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买手续费(%)	</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_purchase_fee" maxlength="80" value="">
                            </td>
                        </tr>

						<tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">交货计数</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_coupon_delivery_count" maxlength="80" value="">
                            </td>
                        </tr>

						<tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">优惠券价值</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_coupon_value" maxlength="80" value="">
                            </td>
                        </tr>

						<tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">积分(%)</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_integral" maxlength="80" value="">
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
