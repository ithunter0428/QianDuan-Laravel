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

<!-- Page Content================================================== -->
<div class="container">
	<div class="my-pages-btn">
		<div class="my-pages-btn-container">
			<div class="my-btn">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="100%" border="0" align="center">
  <tr>
    <td align="center">代购申请</td>
  </tr>
</table>
<br>
<table width="100%" border="1" align="center" cellpadding="6" cellspacing="0" bordercolor="#CCCCCC">
  <tr>
    <td bgcolor="#E8FFFF">&gt;&gt;物流中心</td>
  </tr>
  <tr>
    <td>威海/海运</td>
  </tr>
</table>
<br>
<table width="100%" border="1" align="center" cellpadding="6" cellspacing="0" bordercolor="#CCCCCC">
  <tr>
    <td bgcolor="#E8FFFF">&gt;&gt;收件人信息</td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellpadding="3" cellspacing="0">
      <tr>
        <td>收件人</td>
        <td>地址</td>
      </tr>
      <tr>
        <td><table width="60%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td><input name="textfield" type="text" value="中文姓名"></td>
            <td><input name="textfield2" type="text" value="英文姓名"></td>
          </tr>
        </table></td>
        <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td><input type="text" name="textfield3"></td>
            <td><table width="100%" border="0" align="center">
              <tr>
                <td><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#F2F2F2">
                    <tr>
                      <td align="center">搜索地址</td>
                    </tr>
                </table></td>
                <td><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#F2F2F2">
                    <tr>
                      <td align="center" bgcolor="#0000FF"><span class="STYLE1">通讯录</span></td>
                    </tr>
                </table></td>
              </tr>
            </table></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td><table width="50%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td><label>
              <input type="radio" name="radiobutton" value="radiobutton">
            </label>
个人 </td>
            <td><input type="radio" name="radiobutton" value="radiobutton">
              公司</td>
            <td><input type="radio" name="radiobutton" value="radiobutton">
              外国人</td>
          </tr>
        </table></td>
        <td><input name="textfield33" type="text" value="地址"></td>
      </tr>
      <tr>
        <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="28%"><input name="textfield32" type="text" value="通关编号" size="60"></td>
            <td width="72%"><table width="35%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#F2F2F2">
              <tr>
                <td align="center">个人通关编号</td>
              </tr>
            </table></td>
            </tr>
        </table></td>
        <td><input name="textfield332" type="text" value="详细地址"></td>
      </tr>
      <tr>
        <td><input name="textfield322" type="text" value="电话" size="60"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>发货要求备注(选择)</td>
        <td>发货要求备注(输入)</td>
      </tr>
      <tr>
        <td><select name="select2">
          <option>请输入选项</option>
          <option>通关类目</option>
          <option>通关类目</option>
        </select></td>
        <td><input name="textfield3223" type="text" value=""></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<br>
<table width="100%" border="1" align="center" cellpadding="6" cellspacing="0" bordercolor="#CCCCCC">
  <tr>
    <td bgcolor="#E8FFFF">&gt;&gt;商品信息</td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellpadding="3" cellspacing="0">
      <tr>
        <td colspan="2"><table width="100%" border="0">
          <tr>
            <td width="40%">*标记必须填写</td>
            <td><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#E5E5E5">
              <tr>
                <td align="center">导入商品</td>
              </tr>
            </table></td>
            <td><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#E5E5E5">
              <tr>
                <td align="center">商品URL</td>
              </tr>
            </table></td>
            <td><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#F5F5F5">
              <tr>
                <td align="center">复制</td>
              </tr>
            </table></td>
            <td><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#F5F5F5">
              <tr>
                <td align="center">添加</td>
              </tr>
            </table></td>
            <td><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#F5F5F5">
              <tr>
                <td align="center">删除</td>
              </tr>
            </table></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td valign="top"><table width="100%" border="0">
              <tr>
                <td valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#F2F2F2">
                    <tr>
                      <td width="100" height="120" align="center">上传图片</td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#000099">
                    <tr>
                      <td align="center"><span class="STYLE1">上传图片</span></td>
                    </tr>
                </table></td>
              </tr>
            </table></td>
            <td valign="top"><table width="100%" border="0">
                <tr>
                  <td colspan="2"><input name="textfield4" type="text" value="商城网址" size="50"></td>
                </tr>
                <tr>
                  <td><input name="textfield223" type="text" value="搜索通关类目" size="50"></td>
                  <td><select name="select">
                    <option>请选择通关类目</option>
                    <option>通关类目</option>
                    <option>通关类目</option>
                  </select></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><input name="textfield2232" type="text" value="数量" size="20" /></td>
                  <td><input name="textfield2233" type="text" value="合计" size="20" /></td>
                </tr>
                <tr>
                  <td colspan="2"><input name="textfield2234" type="text" value="商品URL" size="50" /></td>
                </tr>
              </table></td>
          </tr>

        </table></td>
        <td valign="top"><table width="100%" border="0">
          <tr>
            <td><input name="textfield42" type="text" value="商标" size="50"></td>
          </tr>
          <tr>
            <td><input name="textfield2223" type="text" value="商品英文名称" size="50"></td>
          </tr>
          <tr>
            <td>请正确填写英文名称</td>
          </tr>
          <tr>
            <td><table width="100%" border="0">

              <tr>
                <td><input name="textfield22322" type="text" value="颜色" size="20"></td>
                <td><input name="textfield22332" type="text" value="尺寸" size="20"></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><table width="100%" border="0">
                <tr>
                  <td><input name="textfield32232" type="text" value="商品图片URL" size="50" /></td>
                  </tr>
              </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td rowspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
      </tr>

    </table></td>
  </tr>
</table>
<BR>
<table width="100%" border="1" align="center" cellpadding="6" cellspacing="0" bordercolor="#CCCCCC">
  <tr>
    <td bgcolor="#E8FFFF">&gt;&gt;输入商品金额</td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellpadding="3" cellspacing="0">
      <tr>
        <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><table width="100%" border="0">
                  <tr>
                    <td><input name="textfield2232222" type="text" value="总数量" size="40"></td>
                    <td><input name="textfield2233222" type="text" value="总金额" size="40"></td>
                    <td><input name="textfield22332222" type="text" value="总金额" size="50"></td>
                  </tr>
                  <tr>
                    <td>*申请通关金额</td>
                    <td rowspan="3">&nbsp;</td>
                    <td rowspan="3"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#F2F2F2">
                      <tr>
                        <td align="center">通关目录</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td>*超过150美元，有关税需要缴纳</td>
                  </tr>
                  <tr>
                    <td>*不能通关的食品、液体、粉末等通过简易通关（海关扣留，不负责！）</td>
                  </tr>
                </table></td>
              </tr>

            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<br>
<table width="100%" border="1" align="center" cellpadding="6" cellspacing="0" bordercolor="#CCCCCC">
  <tr>
    <td bgcolor="#E8FFFF">&gt;&gt;其他服务</td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellpadding="3" cellspacing="0">
      <tr>
        <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><table width="100%" border="1" cellpadding="3" cellspacing="3" bordercolor="#F3F3F3">
                  <tr>
                    <td bgcolor="#F1F1F1">预付金额</td>
                    <td><table width="50%" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td><label>
                          <input type="radio" name="radiobutton" value="radiobutton">
                          </label>
                          手动结算 </td>
                        <td><input type="radio" name="radiobutton" value="radiobutton">
                          自动结算</td>
                        <td>&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td bgcolor="#F1F1F1">检查项目</td>
                    <td><table width="50%" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td><label>
                          <input type="radio" name="radiobutton" value="radiobutton">
                          </label>
                          普通检查 </td>
                        <td><input type="radio" name="radiobutton" value="radiobutton">
                          精细警察</td>
                        <td>&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td bgcolor="#F1F1F1">包装项目</td>
                    <td><table width="50%" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td><label>
                          <input type="radio" name="radiobutton" value="radiobutton">
                          </label>
                          包装维护 </td>
                        <td><input type="radio" name="radiobutton" value="radiobutton">
                          包装加强</td>
                        <td>&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td bgcolor="#F1F1F1">去除项目</td>
                    <td><table width="50%" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td><label>
                          <input type="radio" name="radiobutton" value="radiobutton">
                          </label>
                          鞋类包装去除 </td>
                        <td><input type="radio" name="radiobutton" value="radiobutton">
                          服装包装去除</td>
                        <td><input type="radio" name="radiobutton" value="radiobutton">
收据及标签去除</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td bgcolor="#F1F1F1">通关项目</td>
                    <td><table width="50%" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td><label>
                          <input type="radio" name="radiobutton" value="radiobutton">
                          </label>
                          普通通关 </td>
                        <td><input type="radio" name="radiobutton" value="radiobutton">
                          企业通关</td>
                        <td>&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td bgcolor="#F1F1F1">物流备注内容</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2"><textarea name="textfield22322222" cols="100">请填写内容</textarea></td>
                    </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<br>
<table width="100%" border="0" align="center">
  <tr>
    <td><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#F2F2F2">
      <tr>
        <td height="40" align="center" bgcolor="#0000FF"><span class="STYLE1">订单报价</span></td>
      </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>


	</td>
  </tr>
</table>
			</div>
		</div>
	</div>
@endsection
