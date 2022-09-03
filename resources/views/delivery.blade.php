@extends('layouts.master')

@section('stylesheets')
	<link rel="stylesheet" href="{{ asset('/delivery_files/UserStyle.css') }}">
	<link rel="stylesheet" href="{{ asset('/delivery_files/DevStyle.css') }}">
	<link rel="stylesheet" href="{{ asset('/delivery_files/blue.css') }}">
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('/delivery_files/Delivery_W.js') }}"></script>
<script type="text/javascript" src="{{ asset('/delivery_files/Common.js') }}"></script>
@endsection

@section('content')
	<!-- Row -->
    <div class="row">
		<!-- Dashboard Box 服务申请注意事项 -->
		<div class="col-xl-12 margin-bottom-20">
			<div class="dashboard-box height_fixed_2 margin-top-0 ">
				<!-- Headline -->
				<div class="headline">
					<h3><i class="icon-feather-chevrons-right"></i>服务申请注意事项</h3>
				</div>
				<div class="content">
					<ul class="dashboard-box-list">
						<li class="pd0">
							<div class="with-border agree_2">
								<ul>
                                    填写协议内容
                                </ul>
							</div>
						</li>
						<li>
							<div class="checkbox">
								<input type="checkbox" name="ServerAgree" id="ServerAgree" value="Y">
								<label for="ServerAgree"><span class="checkbox-icon"></span><strong>同意以上注意事项及内容.</strong><span class="s_txt fc_red">(必选)</span></label>
							</div>
						</li>
					</ul>
				</div>
			</div>
        </div>
	</div>
    <!-- Row / End-->

	<!-- Row -->
	<div class="row">
		<!-- Dashboard Box-->
        <div class="col-md-6">
            <div class="dashboard-box  margin-top-0 margin-bottom-20">

                <!-- Headline -->
                <div class="headline">
                    <h3><i class="icon-feather-chevrons-right"></i>选择物流中心</h3>
                </div>
                <div class="content">
                    <ul class="dashboard-box-list">
                        <li>
                            <div class="submit-field margin-bottom-0">
                                <div class="radio-area ">

                                    <div class="radio">
                                        <input id="SEND_CENTER_SEQ_5" name="SEND_CENTER_SEQ" type="radio" value="5" nationseq="3" shipcd="2,1" shipnm="海运, 航空" crrcd="4" crrennm="CNY" listctmsmny="150" genctmsmny="150" exgrt="190" checked="">
                                        <label for="SEND_CENTER_SEQ_5"><span class="radio-label"></span>威海</label>
                                    </div>

                                    <div class="radio">
                                        <input id="SEND_CENTER_SEQ_12" name="SEND_CENTER_SEQ" type="radio" value="12" nationseq="3" shipcd="2" shipnm="海运" crrcd="4" crrennm="CNY" listctmsmny="150" genctmsmny="150" exgrt="190">
                                        <label for="SEND_CENTER_SEQ_12"><span class="radio-label"></span>青岛</label>
                                    </div>

                                    <div class="radio">
                                        <input id="SEND_CENTER_SEQ_9" name="SEND_CENTER_SEQ" type="radio" value="9" nationseq="3" shipcd="2,1" shipnm="海运, 航空" crrcd="4" crrennm="CNY" listctmsmny="150" genctmsmny="150" exgrt="190">
                                        <label for="SEND_CENTER_SEQ_9"><span class="radio-label"></span>广州</label>
                                    </div>


                                </div>
                                <div class="clearfix"></div>

                            </div>
                        </li>

                    </ul>
                </div>


            </div>

        </div>

        <div class="col-md-6 margin-bottom-20">
            <div class="dashboard-box  margin-top-0 ">

                <!-- Headline -->
                <div class="headline">
                    <h3><i class="icon-feather-chevrons-right"></i>选择货运方式</h3>
                </div>
                <div class="content">
                    <ul class="dashboard-box-list">
                        <li>
                            <div class="submit-field margin-bottom-0">
                                <div class="radio-area " id="vw_DLVR_WAY_CD"><div class="radio"><input type="radio" name="DLVR_WAY_CD" id="DLVR_WAY_CD_2" value="2"><label for="DLVR_WAY_CD_2"><span class="radio-label"></span>海运</label></div><div class="radio"><input type="radio" name="DLVR_WAY_CD" id="DLVR_WAY_CD_1" value="1"><label for="DLVR_WAY_CD_1"><span class="radio-label"></span> 航空</label></div></div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="col-xl-12">
            <div class="tip-text margin-top-0 margin-bottom-20"><span>*</span>代理发货系统</div>
        </div>
	</div>
    <!-- Row / End-->

	<!-- Row -->
	<div class="row">

		<div class="col-xl-12 tc ">
			<a id="next_buton" onclick="fnNext()" class="button ripple-effect dark big">下一步</a>
		</div>
	</div>
    <!-- Row  / End -->

@endsection
