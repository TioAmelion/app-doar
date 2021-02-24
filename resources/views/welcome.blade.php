<!DOCTYPE html>
<html>
<head>
    @include('admin.includes.head')
</head>
<body oncontextmenu="return false;">
    <div class="wrapper">
        @include('admin.includes.navbarSite')   
        <main>
            <div class="main-section">
                <div class="container">
                    <div class="main-section-data">
                        <div class="row">
                            @auth
                                @include('admin.includes.sectionLeft')
                            @endauth
                            @include('admin.includes.feedSite')
                            @auth
                                @include('admin.includes.sectionRigth')
                            @endauth
                        </div>
                    </div><!-- main-section-data end-->
                </div> 
            </div>
        </main>
    </div><!--theme-layout end-->
    @include('admin.includes.script')
</body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0235'})</script>
<script src='assets/img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>
</html>

