<?php
/* @var $this yii\web\View */
?>
<script>
    var $table = $('#table');
    $(function () {
        $(document).on('focus', 'input[type="text"]', function () {
            $(this).parent().find('label').addClass('active');
        }).on('blur', 'input[type="text"]', function () {
            if ($(this).val() == '') {
                $(this).parent().find('label').removeClass('active');
            }
        });
        // bootstrap table初始化
        // http://bootstrap-table.wenzhixin.net.cn/zh-cn/documentation/
        $table.bootstrapTable({
            url: 'resources/data/data1.json',
            height: getHeight(),
            striped: true,
            search: true,
            searchOnEnterKey: true,
            showRefresh: true,
            showToggle: true,
            showColumns: true,
            minimumCountColumns: 2,
            showPaginationSwitch: true,
            clickToSelect: true,
            detailView: true,
            detailFormatter: 'detailFormatter',
            pagination: true,
            paginationLoop: false,
            classes: 'table table-hover table-no-bordered',
            //sidePagination: 'server',
            //silentSort: false,
            smartDisplay: false,
            idField: 'id',
            sortName: 'id',
            sortOrder: 'desc',
            escape: true,
            searchOnEnterKey: true,
            idField: 'systemId',
            maintainSelected: true,
            toolbar: '#toolbar',
            columns: [
                {field: 'state', checkbox: true},
                {field: 'id', title: '编号', sortable: true, halign: 'center'},
                {field: 'username', title: '账号', sortable: true, halign: 'center'},
                {field: 'password', title: '密码', sortable: true, halign: 'center'},
                {field: 'name', title: '姓名', sortable: true, halign: 'center'},
                {field: 'sex', title: '性别', sortable: true, halign: 'center'},
                {field: 'age', title: '年龄', sortable: true, halign: 'center'},
                {field: 'phone', title: '手机', sortable: true, halign: 'center'},
                {field: 'email', title: '邮箱', sortable: true, halign: 'center'},
                {field: 'address', title: '地址', sortable: true, halign: 'center'},
                {field: 'remark', title: '备注', sortable: true, halign: 'center'},
                {field: 'action', title: '操作', halign: 'center', align: 'center', formatter: 'actionFormatter', events: 'actionEvents', clickToSelect: false}
            ]
        }).on('all.bs.table', function (e, name, args) {
            $('[data-toggle="tooltip"]').tooltip();
            $('[data-toggle="popover"]').popover();
        });
    });
    function actionFormatter(value, row, index) {
        return [
            '<a class="like" href="javascript:void(0)" data-toggle="tooltip" title="Like"><i class="glyphicon glyphicon-heart"></i></a>　',
            '<a class="edit ml10" href="javascript:void(0)" data-toggle="tooltip" title="Edit"><i class="glyphicon glyphicon-edit"></i></a>　',
            '<a class="remove ml10" href="javascript:void(0)" data-toggle="tooltip" title="Remove"><i class="glyphicon glyphicon-remove"></i></a>'
        ].join('');
    }

    window.actionEvents = {
        'click .like': function (e, value, row, index) {
            alert('You click like icon, row: ' + JSON.stringify(row));
            console.log(value, row, index);
        },
        'click .edit': function (e, value, row, index) {
            alert('You click edit icon, row: ' + JSON.stringify(row));
            console.log(value, row, index);
        },
        'click .remove': function (e, value, row, index) {
            alert('You click remove icon, row: ' + JSON.stringify(row));
            console.log(value, row, index);
        }
    };
    function detailFormatter(index, row) {
        var html = [];
        $.each(row, function (key, value) {
            html.push('<p><b>' + key + ':</b> ' + value + '</p>');
        });
        return html.join('');
    }
// 新增
    function createAction() {
        $.confirm({
            type: 'dark',
            animationSpeed: 300,
            title: '新增系统',
            content: $('#createDialog').html(),
            buttons: {
                confirm: {
                    text: '确认',
                    btnClass: 'waves-effect waves-button',
                    action: function () {
                        $.alert('确认');
                    }
                },
                cancel: {
                    text: '取消',
                    btnClass: 'waves-effect waves-button'
                }
            }
        });
    }
// 编辑
    function updateAction() {
        var rows = $table.bootstrapTable('getSelections');
        if (rows.length == 0) {
            $.confirm({
                title: false,
                content: '请至少选择一条记录！',
                autoClose: 'cancel|3000',
                backgroundDismiss: true,
                buttons: {
                    cancel: {
                        text: '取消',
                        btnClass: 'waves-effect waves-button'
                    }
                }
            });
        } else {
            $.confirm({
                type: 'blue',
                animationSpeed: 300,
                title: '编辑系统',
                content: $('#createDialog').html(),
                buttons: {
                    confirm: {
                        text: '确认',
                        btnClass: 'waves-effect waves-button',
                        action: function () {
                            $.alert('确认');
                        }
                    },
                    cancel: {
                        text: '取消',
                        btnClass: 'waves-effect waves-button'
                    }
                }
            });
        }
    }
// 删除
    function deleteAction() {
        var rows = $table.bootstrapTable('getSelections');
        if (rows.length == 0) {
            $.confirm({
                title: false,
                content: '请至少选择一条记录！',
                autoClose: 'cancel|3000',
                backgroundDismiss: true,
                buttons: {
                    cancel: {
                        text: '取消',
                        btnClass: 'waves-effect waves-button'
                    }
                }
            });
        } else {
            $.confirm({
                type: 'red',
                animationSpeed: 300,
                title: false,
                content: '确认删除该系统吗？',
                buttons: {
                    confirm: {
                        text: '确认',
                        btnClass: 'waves-effect waves-button',
                        action: function () {
                            var ids = new Array();
                            for (var i in rows) {
                                ids.push(rows[i].systemId);
                            }
                            $.alert('删除：id=' + ids.join("-"));
                        }
                    },
                    cancel: {
                        text: '取消',
                        btnClass: 'waves-effect waves-button'
                    }
                }
            });
        }
    }
</script>
<div class="bootstrap-table"><div class="fixed-table-toolbar"><div class="bs-bars pull-left"><div id="toolbar">
                <a class="waves-effect waves-button" href="javascript:;" onclick="createAction()"><i class="zmdi zmdi-plus"></i> 新增用户</a>
                <a class="waves-effect waves-button" href="javascript:;" onclick="updateAction()"><i class="zmdi zmdi-edit"></i> 编辑用户</a>
                <a class="waves-effect waves-button" href="javascript:;" onclick="deleteAction()"><i class="zmdi zmdi-close"></i> 删除用户</a>
            </div></div><div class="columns columns-right btn-group pull-right"><button class="btn btn-default" type="button" name="paginationSwitch" title="隐藏/显示分页"><i class="glyphicon glyphicon-collapse-down icon-chevron-down"></i></button><button class="btn btn-default" type="button" name="refresh" title="刷新"><i class="glyphicon glyphicon-refresh icon-refresh"></i></button><button class="btn btn-default" type="button" name="toggle" title="切换"><i class="glyphicon glyphicon-list-alt icon-list-alt"></i></button><div class="keep-open btn-group" title="列"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-th icon-th"></i> <span class="caret"></span></button><ul class="dropdown-menu" role="menu"><li><label><input type="checkbox" data-field="id" value="1" checked="checked"> 编号</label></li><li><label><input type="checkbox" data-field="username" value="2" checked="checked"> 账号</label></li><li><label><input type="checkbox" data-field="password" value="3" checked="checked"> 密码</label></li><li><label><input type="checkbox" data-field="name" value="4" checked="checked"> 姓名</label></li><li><label><input type="checkbox" data-field="sex" value="5" checked="checked"> 性别</label></li><li><label><input type="checkbox" data-field="age" value="6" checked="checked"> 年龄</label></li><li><label><input type="checkbox" data-field="phone" value="7" checked="checked"> 手机</label></li><li><label><input type="checkbox" data-field="email" value="8" checked="checked"> 邮箱</label></li><li><label><input type="checkbox" data-field="address" value="9" checked="checked"> 地址</label></li><li><label><input type="checkbox" data-field="remark" value="10" checked="checked"> 备注</label></li><li><label><input type="checkbox" data-field="action" value="11" checked="checked"> 操作</label></li></ul></div></div><div class="pull-right search"><input class="form-control" type="text" placeholder="搜索"></div></div><div class="fixed-table-container table-no-bordered" style="height: 530px; padding-bottom: 40px;"><div class="fixed-table-header" style="margin-right: 17px;"><table class="table table-hover table-no-bordered table-striped" style="width: 953px;"><thead><tr><th class="detail" rowspan="1"><div class="fht-cell" style="width: 27px;"></div></th><th class="bs-checkbox " style="width: 36px; " data-field="state" tabindex="0"><div class="th-inner "><input name="btSelectAll" type="checkbox"></div><div class="fht-cell" style="width: 28px;"></div></th><th style="text-align: center; " data-field="id" tabindex="0"><div class="th-inner sortable both desc">编号</div><div class="fht-cell" style="width: 61px;"></div></th><th style="text-align: center; " data-field="username" tabindex="0"><div class="th-inner sortable both">账号</div><div class="fht-cell" style="width: 71px;"></div></th><th style="text-align: center; " data-field="password" tabindex="0"><div class="th-inner sortable both">密码</div><div class="fht-cell" style="width: 61px;"></div></th><th style="text-align: center; " data-field="name" tabindex="0"><div class="th-inner sortable both">姓名</div><div class="fht-cell" style="width: 61px;"></div></th><th style="text-align: center; " data-field="sex" tabindex="0"><div class="th-inner sortable both">性别</div><div class="fht-cell" style="width: 61px;"></div></th><th style="text-align: center; " data-field="age" tabindex="0"><div class="th-inner sortable both">年龄</div><div class="fht-cell" style="width: 61px;"></div></th><th style="text-align: center; " data-field="phone" tabindex="0"><div class="th-inner sortable both">手机</div><div class="fht-cell" style="width: 93px;"></div></th><th style="text-align: center; " data-field="email" tabindex="0"><div class="th-inner sortable both">邮箱</div><div class="fht-cell" style="width: 134px;"></div></th><th style="text-align: center; " data-field="address" tabindex="0"><div class="th-inner sortable both">地址</div><div class="fht-cell" style="width: 61px;"></div></th><th style="text-align: center; " data-field="remark" tabindex="0"><div class="th-inner sortable both">备注</div><div class="fht-cell" style="width: 156px;"></div></th><th style="text-align: center; " data-field="action" tabindex="0"><div class="th-inner ">操作</div><div class="fht-cell" style="width: 41px;"></div></th></tr></thead></table></div><div class="fixed-table-body"><div class="fixed-table-loading" style="top: 41px; display: none;">正在努力地加载数据中，请稍候……</div><table id="table" class="table table-hover table-no-bordered table-striped" style="margin-top: -40px;"><thead><tr><th class="detail" rowspan="1"><div class="fht-cell"></div></th><th class="bs-checkbox " style="width: 36px; " data-field="state" tabindex="0"><div class="th-inner "><input name="btSelectAll" type="checkbox"></div><div class="fht-cell"></div></th><th style="text-align: center; " data-field="id" tabindex="0"><div class="th-inner sortable both desc">编号</div><div class="fht-cell"></div></th><th style="text-align: center; " data-field="username" tabindex="0"><div class="th-inner sortable both">账号</div><div class="fht-cell"></div></th><th style="text-align: center; " data-field="password" tabindex="0"><div class="th-inner sortable both">密码</div><div class="fht-cell"></div></th><th style="text-align: center; " data-field="name" tabindex="0"><div class="th-inner sortable both">姓名</div><div class="fht-cell"></div></th><th style="text-align: center; " data-field="sex" tabindex="0"><div class="th-inner sortable both">性别</div><div class="fht-cell"></div></th><th style="text-align: center; " data-field="age" tabindex="0"><div class="th-inner sortable both">年龄</div><div class="fht-cell"></div></th><th style="text-align: center; " data-field="phone" tabindex="0"><div class="th-inner sortable both">手机</div><div class="fht-cell"></div></th><th style="text-align: center; " data-field="email" tabindex="0"><div class="th-inner sortable both">邮箱</div><div class="fht-cell"></div></th><th style="text-align: center; " data-field="address" tabindex="0"><div class="th-inner sortable both">地址</div><div class="fht-cell"></div></th><th style="text-align: center; " data-field="remark" tabindex="0"><div class="th-inner sortable both">备注</div><div class="fht-cell"></div></th><th style="text-align: center; " data-field="action" tabindex="0"><div class="th-inner ">操作</div><div class="fht-cell"></div></th></tr></thead><tbody><tr data-index="0"><td><a class="detail-icon" href="javascript:"><i class="glyphicon glyphicon-plus icon-plus"></i></a></td><td class="bs-checkbox "><input data-index="0" name="btSelectItem" type="checkbox"></td><td style="">20</td><td style="">shuzheng</td><td style="">123456</td><td style="">张三</td><td style="">1</td><td style="">28</td><td style="">13987654321</td><td style="">469741414@qq.com</td><td style="">中国 北京</td><td style="">官网：http://www.shuzheng.cn</td><td style="text-align: center; "><a class="like" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Like"><i class="glyphicon glyphicon-heart"></i></a>　<a class="edit ml10" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Edit"><i class="glyphicon glyphicon-edit"></i></a>　<a class="remove ml10" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td></tr><tr data-index="1"><td><a class="detail-icon" href="javascript:"><i class="glyphicon glyphicon-plus icon-plus"></i></a></td><td class="bs-checkbox "><input data-index="1" name="btSelectItem" type="checkbox"></td><td style="">19</td><td style="">shuzheng</td><td style="">123456</td><td style="">张三</td><td style="">1</td><td style="">28</td><td style="">13987654321</td><td style="">469741414@qq.com</td><td style="">中国 北京</td><td style="">官网：http://www.shuzheng.cn</td><td style="text-align: center; "><a class="like" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Like"><i class="glyphicon glyphicon-heart"></i></a>　<a class="edit ml10" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Edit"><i class="glyphicon glyphicon-edit"></i></a>　<a class="remove ml10" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td></tr><tr data-index="2"><td><a class="detail-icon" href="javascript:"><i class="glyphicon glyphicon-plus icon-plus"></i></a></td><td class="bs-checkbox "><input data-index="2" name="btSelectItem" type="checkbox"></td><td style="">18</td><td style="">shuzheng</td><td style="">123456</td><td style="">张三</td><td style="">1</td><td style="">28</td><td style="">13987654321</td><td style="">469741414@qq.com</td><td style="">中国 北京</td><td style="">官网：http://www.shuzheng.cn</td><td style="text-align: center; "><a class="like" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Like"><i class="glyphicon glyphicon-heart"></i></a>　<a class="edit ml10" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Edit"><i class="glyphicon glyphicon-edit"></i></a>　<a class="remove ml10" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td></tr><tr data-index="3"><td><a class="detail-icon" href="javascript:"><i class="glyphicon glyphicon-plus icon-plus"></i></a></td><td class="bs-checkbox "><input data-index="3" name="btSelectItem" type="checkbox"></td><td style="">17</td><td style="">shuzheng</td><td style="">123456</td><td style="">张三</td><td style="">1</td><td style="">28</td><td style="">13987654321</td><td style="">469741414@qq.com</td><td style="">中国 北京</td><td style="">官网：http://www.shuzheng.cn</td><td style="text-align: center; "><a class="like" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Like"><i class="glyphicon glyphicon-heart"></i></a>　<a class="edit ml10" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Edit"><i class="glyphicon glyphicon-edit"></i></a>　<a class="remove ml10" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td></tr><tr data-index="4"><td><a class="detail-icon" href="javascript:"><i class="glyphicon glyphicon-plus icon-plus"></i></a></td><td class="bs-checkbox "><input data-index="4" name="btSelectItem" type="checkbox"></td><td style="">16</td><td style="">shuzheng</td><td style="">123456</td><td style="">张三</td><td style="">1</td><td style="">28</td><td style="">13987654321</td><td style="">469741414@qq.com</td><td style="">中国 北京</td><td style="">官网：http://www.shuzheng.cn</td><td style="text-align: center; "><a class="like" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Like"><i class="glyphicon glyphicon-heart"></i></a>　<a class="edit ml10" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Edit"><i class="glyphicon glyphicon-edit"></i></a>　<a class="remove ml10" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td></tr><tr data-index="5"><td><a class="detail-icon" href="javascript:"><i class="glyphicon glyphicon-plus icon-plus"></i></a></td><td class="bs-checkbox "><input data-index="5" name="btSelectItem" type="checkbox"></td><td style="">15</td><td style="">shuzheng</td><td style="">123456</td><td style="">张三</td><td style="">1</td><td style="">28</td><td style="">13987654321</td><td style="">469741414@qq.com</td><td style="">中国 北京</td><td style="">官网：http://www.shuzheng.cn</td><td style="text-align: center; "><a class="like" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Like"><i class="glyphicon glyphicon-heart"></i></a>　<a class="edit ml10" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Edit"><i class="glyphicon glyphicon-edit"></i></a>　<a class="remove ml10" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td></tr><tr data-index="6"><td><a class="detail-icon" href="javascript:"><i class="glyphicon glyphicon-plus icon-plus"></i></a></td><td class="bs-checkbox "><input data-index="6" name="btSelectItem" type="checkbox"></td><td style="">14</td><td style="">shuzheng</td><td style="">123456</td><td style="">张三</td><td style="">1</td><td style="">28</td><td style="">13987654321</td><td style="">469741414@qq.com</td><td style="">中国 北京</td><td style="">官网：http://www.shuzheng.cn</td><td style="text-align: center; "><a class="like" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Like"><i class="glyphicon glyphicon-heart"></i></a>　<a class="edit ml10" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Edit"><i class="glyphicon glyphicon-edit"></i></a>　<a class="remove ml10" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td></tr><tr data-index="7"><td><a class="detail-icon" href="javascript:"><i class="glyphicon glyphicon-plus icon-plus"></i></a></td><td class="bs-checkbox "><input data-index="7" name="btSelectItem" type="checkbox"></td><td style="">13</td><td style="">shuzheng</td><td style="">123456</td><td style="">张三</td><td style="">1</td><td style="">28</td><td style="">13987654321</td><td style="">469741414@qq.com</td><td style="">中国 北京</td><td style="">官网：http://www.shuzheng.cn</td><td style="text-align: center; "><a class="like" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Like"><i class="glyphicon glyphicon-heart"></i></a>　<a class="edit ml10" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Edit"><i class="glyphicon glyphicon-edit"></i></a>　<a class="remove ml10" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td></tr><tr data-index="8"><td><a class="detail-icon" href="javascript:"><i class="glyphicon glyphicon-plus icon-plus"></i></a></td><td class="bs-checkbox "><input data-index="8" name="btSelectItem" type="checkbox"></td><td style="">12</td><td style="">shuzheng</td><td style="">123456</td><td style="">张三</td><td style="">1</td><td style="">28</td><td style="">13987654321</td><td style="">469741414@qq.com</td><td style="">中国 北京</td><td style="">官网：http://www.shuzheng.cn</td><td style="text-align: center; "><a class="like" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Like"><i class="glyphicon glyphicon-heart"></i></a>　<a class="edit ml10" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Edit"><i class="glyphicon glyphicon-edit"></i></a>　<a class="remove ml10" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td></tr><tr data-index="9"><td><a class="detail-icon" href="javascript:"><i class="glyphicon glyphicon-plus icon-plus"></i></a></td><td class="bs-checkbox "><input data-index="9" name="btSelectItem" type="checkbox"></td><td style="">11</td><td style="">shuzheng</td><td style="">123456</td><td style="">张三</td><td style="">1</td><td style="">28</td><td style="">13987654321</td><td style="">469741414@qq.com</td><td style="">中国 北京</td><td style="">官网：http://www.shuzheng.cn</td><td style="text-align: center; "><a class="like" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Like"><i class="glyphicon glyphicon-heart"></i></a>　<a class="edit ml10" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Edit"><i class="glyphicon glyphicon-edit"></i></a>　<a class="remove ml10" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Remove"><i class="glyphicon glyphicon-remove"></i></a></td></tr></tbody></table></div><div class="fixed-table-footer" style="display: none;"><table><tbody><tr></tr></tbody></table></div><div class="fixed-table-pagination"><div class="pull-left pagination-detail"><span class="pagination-info">显示第 1 到第 10 条记录，总共 102 条记录</span><span class="page-list">每页显示 <span class="btn-group dropup"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="page-size">10</span> <span class="caret"></span></button><ul class="dropdown-menu" role="menu"><li class="active"><a href="javascript:void(0)">10</a></li><li><a href="javascript:void(0)">25</a></li><li><a href="javascript:void(0)">50</a></li><li><a href="javascript:void(0)">100</a></li></ul></span> 条记录</span></div><div class="pull-right pagination"><ul class="pagination"><li class="page-pre"><a href="javascript:void(0)">‹</a></li><li class="page-number active"><a href="javascript:void(0)">1</a></li><li class="page-number"><a href="javascript:void(0)">2</a></li><li class="page-number"><a href="javascript:void(0)">3</a></li><li class="page-number"><a href="javascript:void(0)">4</a></li><li class="page-number"><a href="javascript:void(0)">5</a></li><li class="page-last-separator disabled"><a href="javascript:void(0)">...</a></li><li class="page-last"><a href="javascript:void(0)">11</a></li><li class="page-next"><a href="javascript:void(0)">›</a></li></ul></div></div></div></div>