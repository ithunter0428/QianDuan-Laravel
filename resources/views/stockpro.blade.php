@extends('layouts.master')

@section('content')
<div class="container">
	<div class="my-pages-btn">
		<div class="my-pages-btn-container">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td><table width="100%" border="0" align="center">
                        <tr>
                            <td align="center">库存申请</td>
                        </tr>
                    </table>
                    <br>
                    <table width="100%" border="1" align="center" cellpadding="6" cellspacing="0" bordercolor="#CCCCCC">
                        <tr>
                            <td bgcolor="#E8FFFF">&gt;&gt;物流中心</td>
                        </tr>
                        <tr>
                            <td><table width="50%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td><label>
                                <input type="radio" name="radiobutton" value="radiobutton" />
                                </label>
                                威海 </td>
                                <td><input type="radio" name="radiobutton" value="radiobutton" />
                                青岛</td>
                                <td><input type="radio" name="radiobutton" value="radiobutton" />
                                广州</td>
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
                                        <td>&nbsp;</td>
                                        <td><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#E5E5E5">
                                        <tr>
                                            <td align="center">复制订单明细</td>
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
                                            <td colspan="2"><input name="textfield22" type="text" value="通关类目搜索" size="50"></td>
                                            </tr>
                                            <tr>
                                            <td colspan="2"><input name="textfield223" type="text" value="TRACKING NO" size="50" /></td>
                                            </tr>
                                            <tr>
                                            <td colspan="2">&nbsp;</td>
                                            </tr>
                                            <tr>
                                            <td width="40%"><input name="textfield2232" type="text" value="数量" size="20"></td>
                                            <td><input name="textfield2233" type="text" value="单价" size="20"></td>
                                            </tr>
                                            <tr>
                                            <td colspan="2"><input name="textfield2234" type="text" value="商品URL" size="50"></td>
                                            </tr>
                                        </table></td>
                                    </tr>

                                    </table></td>
                                    <td valign="top"><table width="100%" border="0">
                                    <tr>
                                        <td><input name="textfield42" type="text" value="商标" size="50"></td>
                                    </tr>
                                    <tr>
                                        <td><select name="select">
                                        <option>请选择通关类目</option>
                                        </select></td>
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
                                        <tr>
                                            <td colspan="2"><input name="textfield32232" type="text" value="商品图片URL" size="50" /></td>
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
                                <td height="40" align="center" bgcolor="#0000FF"><span class="STYLE1">库存申请</span></td>
                            </tr>
                            </table></td>
                        </tr>
                </table> </td>
                </tr>
            </table>
		</div>
	</div>
</div>
@endsection
