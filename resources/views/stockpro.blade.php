@extends('layouts.master')

@section('scripts')
<script type="text/javascript" src="{{ asset('/stock/stock.js') }}"></script>
@endsection

@section('content')
<div class="container">
	<div class="my-pages-btn">
		<div class="my-pages-btn-container">
            <form action="/api/stock/new_request" method="post">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td>
                        <table width="100%" border="0" align="center">
                            <tr><td align="center">库存申请</td></tr>
                        </table>
                        <br>
                        <table width="100%" border="1" align="center" cellpadding="6" cellspacing="0" bordercolor="#CCCCCC">
                            <tr><td bgcolor="#E8FFFF">&gt;&gt;物流中心</td></tr>
                            <tr>
                                <td>
                                    <table width="50%" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td>
                                                <label>
                                                    <input type="radio" name="logistics_center" value="威海" />
                                                </label>
                                                威海
                                            </td>
                                            <td>
                                                <input type="radio" name="logistics_center" value="青岛" />
                                                青岛
                                            </td>
                                            <td>
                                                <input type="radio" name="logistics_center" value="广州" />
                                                广州
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%" border="1" align="center" cellpadding="6" cellspacing="0" bordercolor="#CCCCCC">
                            <tr>
                                <td bgcolor="#E8FFFF">&gt;&gt;商品信息</td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="100%" border="0" cellpadding="3" cellspacing="0">
                                        <tr>
                                            <td colspan="2">
                                                <table width="100%" border="0">
                                                    <tr>
                                                        <td width="40%">*标记必须填写</td>
                                                        <td>&nbsp;</td>
                                                        <!-- <td><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#E5E5E5">
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
                                                        </table></td> -->
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td valign="top">
                                                            <table width="100%" border="0">
                                                                <tr>
                                                                    <td valign="top">
                                                                        <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#F2F2F2">
                                                                            <tr>
                                                                                <td width="100" height="120" align="center">上传图片</td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#000099">
                                                                            <tr>
                                                                                <td align="center"><span class="STYLE1">上传图片</span></td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td valign="top">
                                                            <table width="100%" border="0">
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <input name="mall_url" type="text" placeholder="商城网址" size="50">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <input name="clearance_category_search" type="text" placeholder="通关类目搜索" size="50">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <input name="tracking_number" type="text" placeholder="TRACKING NO" size="50" />
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="40%"><input name="quantity" type="text" placeholder="数量" size="20"></td>
                                                                    <td><input name="unit_price" type="text" placeholder="单价" size="20"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><input name="product_url" type="text" placeholder="商品URL" size="50"></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td valign="top">
                                                <table width="100%" border="0">
                                                    <tr>
                                                        <td><input name="trademark" type="text" placeholder="商标" size="50"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><select name="select">
                                                        <option>请选择通关类目</option>
                                                        </select></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="product_english_name" type="text" placeholder="商品英文名称" size="50"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>请正确填写英文名称</td>
                                                    </tr>
                                                    <tr>
                                                        <td><table width="100%" border="0">

                                                        <tr>
                                                            <td><input name="color" type="text" placeholder="颜色" size="20"></td>
                                                            <td><input name="size" type="text" placeholder="尺寸" size="20"></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2"><input name="product_image_url" type="text" placeholder="商品图片URL" size="50" /></td>
                                                            </tr>
                                                        </table></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <table width="100%" border="0" align="center">
                            <tr>
                                <td>
                                    <table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#F2F2F2">
                                        <tr>
                                            <td height="40" align="center" bgcolor="#0000FF">
                                                <button type="submit" class="STYLE1" style="color: white; background-color: transparent; width: 100%;">
                                                    库存申请
                                                </button>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            </form>
		</div>
	</div>
</div>
@endsection
