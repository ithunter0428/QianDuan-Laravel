@extends('layouts.admin')

@section('globalStyles')
@endsection

@section('pageStyles')
<script>
	const $tabCenter = "{{ $tabCenter }}";
</script>
@endsection

@section('globalScripts')
@endsection

@section('pageScripts')
<script type="text/javascript" src="{{ asset('/admin_files/environment/DlvrFee_L.js') }}"></script>
@endsection

@section('content')
<!-- body content start-->
<div class="body-content left-M-0">
<div class="conBox">

<div id="mid-col">
	<div class="box">
		<div class="nTitle">
			<h2>运费管理</h2>
			<h4 class="white corners">환경설정 &gt; 运费管理</h4>
		</div>
		<div class="box-container corners02"><!-- Begin 검색 폼 -->


			<!-- Begin : Tab Menu -->
			<div class="tab_stat">
				<table>
				<tbody>
				<tr>

					@foreach($centers as $center)
						<td class="{{ $tabCenter == $center['method']? 'on': '' }}" style="width:160px;"><a href="{{ url('/admin/environment/dlv_free/' . $center['method']) }}">{{ $center['method'] }}</a></td>
					@endforeach
					<!-- <td class="on" style="width:160px;"><a href="http://ds2.areumsoft.co/Admin/Setup/DlvrFee_L.asp?sCenterSeq=5&amp;sDlvrWayCd=2">威海/海运</a></td>

					<td class="" style="width:160px;"><a href="http://ds2.areumsoft.co/Admin/Setup/DlvrFee_L.asp?sCenterSeq=5&amp;sDlvrWayCd=1">위해 / 항공</a></td>

					<td class="" style="width:160px;"><a href="http://ds2.areumsoft.co/Admin/Setup/DlvrFee_L.asp?sCenterSeq=12&amp;sDlvrWayCd=2">青岛/海运</a></td>

					<td class="" style="width:160px;"><a href="http://ds2.areumsoft.co/Admin/Setup/DlvrFee_L.asp?sCenterSeq=9&amp;sDlvrWayCd=2">广州/海运</a></td>

					<td class="" style="width:160px;"><a href="http://ds2.areumsoft.co/Admin/Setup/DlvrFee_L.asp?sCenterSeq=9&amp;sDlvrWayCd=1">广州/航空</a></td> -->

				</tr>
				</tbody>
				</table>
			</div>

			<p class="clrBoth pHt10"></p>
			<!-- End : Tab Menu -->

			<div class="btn-area">
				<!-- <span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./DlvrFee_W.asp?sCenterSeq=5&#39;, &#39;DlvrFee_W&#39;, 800, 250);">运费管理确认</button></span> -->
				<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnEdit();">运费管理确认</button></span>

				<!--span class="whGrnBtn ty2"><button type="button" class="txt" OnClick="fnPopWinCT('./DlvrFeeText_W.asp', 'DlvrFeeText_W', 1000, 850);">运费管理일괄确认</button></span>-->

				&nbsp; &nbsp;

				<select id='delete_select' name="CENTER_SEQ">
					<option value="">= 센터별 요율 삭제</option>

					@foreach($centers as $center)
						<option value="{{ $center['method'] }}" dlvrwaycd="2">{{ $center['method'] }}</option>
					@endforeach

				</select>
				<span class="whRedBtn ty2"><button type="button" class="txt" onclick="fnDel();">삭제</button></span>
			</div>


			<p class="clrBoth pHt10"></p>


			<!-- <form name="frmSearch" id="frmSearch" method="get">
				<input type="hidden" name="gMnu1" id="gMnu1" value="108">
				<input type="hidden" name="gMnu2" id="gMnu2" value="10805">
				<input type="hidden" name="sGo" id="sGo" value="">
				<input type="hidden" name="sPageSize" id="sPageSize" value=""> -->

			@foreach(array(1,2,3,4,5) as $index)
			<div class="notice-board" style="width:20%;float:left;">

				<table border="1">
				<tbody><tr>
					<th>重量</th>
					<th><strong>{{ $index }}레벨</strong></th>
				</tr>

				@foreach(array_filter($data, function($k) use ($index) {return $k['level'] == $index;}) as $row)
				<tr>
					<td class="ntc alCenter"><strong>{{ $row['weight'] }}<strong> kg</strong></strong></td>
					<td class="alCenter"><strong>￦{{ $row['price'] }}</strong></td>
				</tr>
				@endforeach

				</tbody>
				</table>
			</div>
			@endforeach

			<p style="clear:both;"></p>

			<div class="btn-area">
				<!-- <span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnPopWinCT(&#39;./DlvrFee_W.asp?sCenterSeq=5&#39;, &#39;DlvrFee_W&#39;, 800, 250);">运费管理确认</button></span> -->
				<span class="whGraBtn ty2"><button type="button" class="txt" onclick="fnEdit();">运费管理确认</button></span>
			</div>


		</form>
		</div>


	</div>

</div>

		</div>
		<div class="BtmSolution">
			<h3>©Copyright 2014 ~ 2022 物流系统All rights reserved. <a href="main.html" target="_blank">바로가기</a></h3>
		</div>
	</div>

<div id="edit_modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header" id='edit_modal_header'>
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
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">重量</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_weight" maxlength="80" value="">
                            </td>
                        </tr>

						<tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Price</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_price" maxlength="80" value="">
                            </td>
                        </tr>

						<tr>
                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Level</font></font></th>
                            <td colspan="3">
                                <input type="text" class="iptBox1 w30" id="modal_level" maxlength="80" value="">
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
