@extends('user.layouts')

@section('css')
    <link href="/assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .fancybox > img {
            width: 75px;
            height: 75px;
        }
        .ticker {
            background-color: #fff;
            margin-bottom: 20px;
            border: 1px solid #e7ecf1!important;
            border-radius: 4px;
            -webkit-border-radius: 4px;
        }
        .ticker ul {
            padding: 0;
        }
        .ticker li {
            list-style: none;
            padding: 15px;
        }
    </style>
@endsection
@section('title', trans('home.panel'))
@section('content')
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content" style="padding-top:0;">
        <!-- BEGIN PAGE BASE CONTENT -->
        @if (Session::has('successMsg'))
            <div class="alert alert-success">
                <button class="close" data-close="alert"></button>
                {{Session::get('successMsg')}}
            </div>
        @endif
        <div class="row">
            <div class="col-md-8">
              
              <div class="row widget-row">
                    <div class="col-md-12">
                        <div class="portlet light bordered">
                          	<div class="portlet-title">
                                <div class="caption">
                                	<span class="caption-subject font-blue bold">使用指南</span>
                                </div>
                            	<div class="actions">
                                	<div class="btn-group btn-group-devided">
                                  		<a href="{{url('tickets')}}" class="btn sbold blue"> 
                                  			遇到问题
                                  		</a>
                               		</div>
                              	</div>
                            </div>
                            <div class="portlet-body" style="font-size:16px;">
                            	<ol>
                                  <li>按照下方教程选择系统<b>下载客户端</b></li>
                                  <li>如遇到问题请联系站长, 微信号<b>kelvinsladder</b>。或者可以使用<a href="{{url('tickets')}}">服务单</a></li>
                                  <li>购买<a href="{{url('services')}}">服务套餐</a>。新账户有15天有效期，并获赠1GB免费流量</li>
                                  <li>使用<a href="{{url('referral')}}">推广链接</a>推荐给朋友，可以获得20%红包</li>
                                  <li>加入<a href="https://t.me/joinchat/FCUWKREklAIUcOM05N2o-w" target="_blank">Telegram群组</a>，获取本站最新消息，报告使用异常</li>
                            	</ol>
              						<div class="tabbable-line">
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tools1" data-toggle="tab"> <i class="fa fa-apple"></i> iPhone </a>
                                            </li>
                                            <li>
                                                <a href="#tools5" data-toggle="tab"> <i class="fa fa-android"></i> Android </a>
                                            </li>
                                            <li>
                                                <a href="#tools2" data-toggle="tab"> <i class="fa fa-windows"></i> Windows </a>
                                            </li>
                                            <li>
                                                <a href="#tools4" data-toggle="tab"> <i class="fa fa-apple"></i> Mac </a>
                                            </li>
                                            <li>
                                                <a href="#tools3" data-toggle="tab"> <i class="fa fa-linux"></i> Linux </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" style="font-size:16px;">
                                            <div class="tab-pane active" id="tools1">
                                                <ol>
                                                 	<li> 请<b style="font-size:18px">联系站长</b>获取苹果应用商店美国区账号，没有站长联系方式的朋友请使用<a href="{{url('tickets')}}">服务单</a> </li>
                                                    <li> <a href="/article?id=8" target="_blank">点击此处</a>查看iPhone图文教程 </li>
                                                </ol>
                                            </div>
                                            <div class="tab-pane" id="tools2">
                                                <ol>
                                                    <li> <a href="/article?id=7" target="_blank">点击此处</a>查看Windows图文教程</li>
                                                </ol>
                                            </div>
                                            <div class="tab-pane" id="tools3">
                                                <ol>
                                                    <li> <a href="https://softs.wtf/?dir=%E7%A7%91%E5%AD%A6%E4%B8%8A%E7%BD%91/PC/Shadowsocks/Linux/Shadowsocks-qt5" target="_blank">点击此处</a>下载客Linux户端并启动 </li>
                                                    <li> 单击状态栏小飞机，找到服务器->编辑订阅，复制粘贴<mark>订阅地址</mark> </li>
                                                    <li> 更新订阅设置即可 </li>
                                                </ol>
                                            </div>
                                            <div class="tab-pane" id="tools4">
                                                 <ol>
                                                    <li> <a href="/article?id=10" target="_blank">点击此处</a>查看Mac图文教程</li>
                                                </ol>
                                            </div>
                                            <div class="tab-pane" id="tools5">
                                                <ol>
                                                    <li> <a href="/article?id=9" target="_blank">点击此处</a>查看安卓图文教程</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                              </div>
                          </div>
                      </div>
                </div>
              
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light">
                            <div class="portlet-title">
                                <div class="caption">
                                    <span class="caption-subject font-blue bold">订阅</span>
                                </div>
                              <div class="actions">
                                <div class="btn-group btn-group-devided">
                                    <a href="{{url('services')}}" class="btn sbold blue"> 
                                      {{trans('home.services')}}
                                    </a>
                                </div>
                              </div>
                            </div>
                            <div class="portlet-body">
                                <div class="mt-clipboard-container" style="padding-top:0px;">                
                                    @if($subscribe_status)
		                                <label><mark><b>订阅地址</b></mark></label>
                                        <input type="text" id="mt-target-1" class="form-control" value="{{$link}}" />
                                        <a href="javascript:exchangeSubscribe();" class="btn green">
                                            {{trans('home.exchange_subscribe')}}
                                        </a>
                                        <a href="javascript:;" class="btn blue mt-clipboard" data-clipboard-action="copy" data-clipboard-target="#mt-target-1">
                                            {{trans('home.copy_subscribe_address')}}
                                        </a>
                                		<p> {{trans('home.subscribe_warning')}} </p>                                  		
                                    @else
                                        <h3>{{trans('home.subscribe_baned')}}</h3>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                             
                @if(!$nodeList->isEmpty())
                <div class="row widget-row">
                    <div class="col-md-12">
                        <div class="portlet light bordered">
                          	<div class="portlet-title">
                                <div class="caption">
                                	<span class="caption-subject font-blue bold">节点列表</span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="tab-content">
                                    <div class="tab-pane active">
                                        <div class="mt-comments">
                                            @foreach($nodeList as $node)
                                                <div class="mt-comment">
                                                    <div class="mt-comment-img" style="width:auto;">
                                                        @if($node->country_code)
                                                            <img src="{{asset('assets/images/country/' . $node->country_code . '.png')}}"/>
                                                        @else
                                                            <img src="{{asset('/assets/images/country/un.png')}}"/>
                                                        @endif
                                                    </div>
                                                    <div class="mt-comment-body">
                                                        <div class="mt-comment-info">
                                                            <span class="mt-comment-author">{{$node->name}} - {{$node->server ? $node->server : $node->ip}}</span>
                                                            <span class="mt-comment-date">
                                                                @if(!$node->online_status)
                                                                    <span class="badge badge-danger">维护中</span>
                                                                @endif
                                                            </span>
                                                        </div>
                                                        <div class="mt-comment-text"> {{$node->desc}} </div>
                                                        <div class="mt-comment-details">
                                                            <span class="mt-comment-status mt-comment-status-pending">
                                                                @if($node->labels)
                                                                    @foreach($node->labels as $vo)
                                                                        <span class="badge badge-info">{{$vo->labelInfo->name}}</span>
                                                                    @endforeach
                                                                @endif
                                                            </span>
                                                            <ul class="mt-comment-actions" style="display: block;">
                                                                <li>
                                                                    <a class="btn btn-sm green btn-outline" data-toggle="modal" href="#link_{{$node->id}}"> <i class="fa fa-paper-plane"></i> </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn btn-sm green btn-outline" data-toggle="modal" href="#qrcode_{{$node->id}}"> <i class="fa fa-qrcode"></i> </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <div class="col-md-4" style="padding-left: 3px;">
                <ul class="list-group">
                    @if($info['enable'])
                    <li class="list-group-item">
                            {{trans('home.account_status')}}：{{trans('home.enabled')}}
                        </li>
                    @else
                        <li class="list-group-item list-group-item-danger">
                            {{trans('home.account_status')}}：{{trans('home.disabled')}}
                    </li>
                    @endif
                    @if($login_add_score)
                        <li class="list-group-item">
                            {{trans('home.account_score')}}：{{$info['score']}}
                            <span class="badge badge-info">
                            <a href="javascript:;" data-toggle="modal" data-target="#exchange_modal" style="color:#FFF;">{{trans('home.redeem_coupon')}}</a>
                        </span>
                        </li>
                    @endif
                    <li class="list-group-item">
                        {{trans('home.account_balance')}}：{{$info['balance']}}
                        <span class="badge badge-danger">
                            <a href="javascript:;" data-toggle="modal" data-target="#charge_modal" style="color:#FFF;">{{trans('home.recharge')}}</a>
                        </span>
                    </li>
                    @if(date('Y-m-d') > $info['expire_time'])
                        <li class="list-group-item list-group-item-danger">
                            {{trans('home.account_expire')}}：{{trans('home.expired')}}
                        </li>
                    @else
                    <li class="list-group-item">
                            {{trans('home.account_expire')}}：{{$info['expire_time']}}
                    </li>
                    @endif
                    <li class="list-group-item">
                        {{trans('home.account_last_usage')}}：{{empty($info['t']) ? trans('home.never_used') : date('Y-m-d H:i:s', $info['t'])}}
                    </li>
                    <li class="list-group-item">
                        {{trans('home.account_last_login')}}：{{empty($info['last_login']) ? trans('home.never_loggedin') : date('Y-m-d H:i:s', $info['last_login'])}}
                    </li>
                    <li class="list-group-item">
                        {{trans('home.account_bandwidth_usage')}}：{{$info['usedTransfer']}}（{{$info['totalTransfer']}}）@if($info['traffic_reset_day']) &ensp;{{trans('home.account_reset_notice', ['reset_day' => $info['traffic_reset_day']])}}  @endif
                        <div class="progress progress-striped active" style="margin-bottom:0;" title="{{trans('home.account_total_traffic')}} {{$info['totalTransfer']}}，{{trans('home.account_usage_traffic')}} {{$info['usedTransfer']}}">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{$info['usedPercent'] * 100}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$info['usedPercent'] * 100}}%">
                                <span class="sr-only"> {{$info['usedTransfer']}} / {{$info['totalTransfer']}} </span>
                            </div>
                        </div>
                    </li>
                </ul>

                @if($is_push_bear && $push_bear_qrcode)
                    <ul class="list-group" style="border-radius: 4px;">
                        <li class="list-group-item">
                            <div style="text-align: center">
                                <span> 微信扫码订阅，获取最新资讯 </span>
                                <br><br>
                                <div id="subscribe_qrcode" style="text-align: center;"></div>
                            </div>
                        </li>
                    </ul>
                @endif

                <ul class="list-group" style="visibility:hidden">
                    @foreach($userLoginLog as $log)
                    <li class="list-group-item">
                        {{$log->created_at}}&ensp;{{$log->ip}}&ensp;{{$log->area}}&ensp;{{$log->isp}}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div id="charge_modal" class="modal fade" tabindex="-1" data-focus-on="input:first" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">{{trans('home.recharge_balance')}}</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger" style="display: none; text-align: center;" id="charge_msg"></div>
                        <form action="#" method="post" class="form-horizontal">
                            <div class="form-body">
                                <div class="form-group">
                                    <label for="charge_type" class="col-md-4 control-label">{{trans('home.payment_method')}}</label>
                                    <div class="col-md-6">
                                        <select class="form-control" name="charge_type" id="charge_type">
                                            <option value="1" selected>{{trans('home.coupon')}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="charge_coupon" class="col-md-4 control-label"> {{trans('home.coupon_code')}} </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="charge_coupon" id="charge_coupon" placeholder="{{trans('home.please_input_coupon')}}">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn dark btn-outline">{{trans('home.close')}}</button>
                        <button type="button" class="btn red btn-outline" onclick="return charge();">{{trans('home.recharge')}}</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="exchange_modal" class="modal fade" tabindex="-1" data-focus-on="input:first" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title"> {{trans('home.redeem_score')}} </h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-info" id="msg">{{trans('home.redeem_info', ['score' => $info['score']])}}</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn dark btn-outline">{{trans('home.close')}}</button>
                        <button type="button" class="btn red btn-outline" onclick="return exchange();">{{trans('home.redeem')}}</button>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($nodeList as $node)
            <div class="modal fade draggable-modal" id="txt_{{$node->id}}" tabindex="-1" role="basic" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">{{trans('home.setting_info')}}</h4>
                        </div>
                        <div class="modal-body">
                            <textarea class="form-control" rows="10" readonly="readonly">{{$node->txt}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade draggable-modal" id="link_{{$node->id}}" tabindex="-1" role="basic" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">{{$node->name}}</h4>
                        </div>
                        <div class="modal-body">
                            <textarea class="form-control" rows="5" readonly="readonly">{{$node->ssr_scheme}}</textarea>
                            <a href="{{$node->ssr_scheme}}" class="btn purple uppercase" style="display: block; width: 100%;margin-top: 10px;">打开SSR</a>
                            @if($node->ss_scheme)
                            <p></p>
                            <textarea class="form-control" rows="3" readonly="readonly">{{$node->ss_scheme}}</textarea>
                            <a href="{{$node->ss_scheme}}" class="btn blue uppercase" style="display: block; width: 100%;margin-top: 10px;">打开SS</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="qrcode_{{$node->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog @if(!$node->compatible) modal-sm @endif">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">{{trans('home.scan_qrcode')}}</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                @if ($node->compatible)
                                    <div class="col-md-6">
                                        <div id="qrcode_ssr_img_{{$node->id}}" style="text-align: center;"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="qrcode_ss_img_{{$node->id}}" style="text-align: center;"></div>
                                    </div>
                                @else
                                    <div class="col-md-12">
                                        <div id="qrcode_ssr_img_{{$node->id}}" style="text-align: center;"></div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
@endsection
@section('script')
    <script src="/assets/global/plugins/clipboardjs/clipboard.min.js" type="text/javascript"></script>
    <script src="/assets/pages/scripts/components-clipboard.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/jquery-qrcode/jquery.qrcode.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/js/layer/layer.js" type="text/javascript"></script>

    <script type="text/javascript">
        // 充值
        function charge() {
            var _token = '{{csrf_token()}}';
            var charge_type = $("#charge_type").val();
            var charge_coupon = $("#charge_coupon").val();

            if (charge_type == '1' && (charge_coupon == '' || charge_coupon == undefined)) {
                $("#charge_msg").show().html("{{trans('home.coupon_not_empty')}}");
                $("#charge_coupon").focus();
                return false;
            }

            $.ajax({
                url:'{{url('charge')}}',
                type:"POST",
                data:{_token:_token, coupon_sn:charge_coupon},
                beforeSend:function(){
                    $("#charge_msg").show().html("{{trans('home.recharging')}}");
                },
                success:function(ret){
                    if (ret.status == 'fail') {
                        $("#charge_msg").show().html(ret.message);
                        return false;
                    }

                    $("#charge_modal").modal("hide");
                    window.location.reload();
                },
                error:function(){
                    $("#charge_msg").show().html("{{trans('home.error_response')}}");
                },
                complete:function(){}
            });
        }

        // 积分兑换流量
        function exchange() {
            $.ajax({
                type: "POST",
                url: "{{url('exchange')}}",
                async: false,
                data: {_token:'{{csrf_token()}}'},
                dataType: 'json',
                success: function (ret) {
                    layer.msg(ret.message, {time:1000}, function() {
                        if (ret.status == 'success') {
                            window.location.reload();
                        }
                    });
                }
            });

            return false;
        }
    </script>

    <script type="text/javascript">
        var UIModals = function () {
            var n = function () {
                @foreach($nodeList as $node)
                    $("#txt_{{$node->id}}").draggable({handle: ".modal-header"});
                    $("#qrcode_{{$node->id}}").draggable({handle: ".modal-header"});
                @endforeach
            };

            return {
                init: function () {
                    n()
                }
            }
        }();

        jQuery(document).ready(function () {
            UIModals.init()
        });

        // 循环输出节点scheme用于生成二维码
        @foreach ($nodeList as $node)
            $('#qrcode_ssr_img_{{$node->id}}').qrcode("{{$node->ssr_scheme}}");
            $('#qrcode_ss_img_{{$node->id}}').qrcode("{{$node->ss_scheme}}");
        @endforeach

        // 节点订阅
        function subscribe() {
            window.location.href = '{{url('subscribe')}}';
        }

        // 显示加密、混淆、协议
        function show(txt) {
            layer.msg(txt);
        }

        // 生成消息通道订阅二维码
        @if($is_push_bear && $push_bear_qrcode)
            $('#subscribe_qrcode').qrcode({render:"canvas", text:"{{$push_bear_qrcode}}", width:170, height:170});
        @endif

        // 更换订阅地址
        function exchangeSubscribe() {
            layer.confirm('更换订阅地址将导致：<br>1.旧地址立即失效；<br>2.连接密码被更改；', {icon: 7, title:'警告'}, function(index) {
                $.post("{{url('exchangeSubscribe')}}", {_token:'{{csrf_token()}}'}, function (ret) {
                    layer.msg(ret.message, {time:1000}, function () {
                        if (ret.status == 'success') {
                            window.location.reload();
                        }
                    });
                });

                layer.close(index);
            });
        }
    </script>
@endsection
