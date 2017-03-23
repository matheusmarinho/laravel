
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="B34oy9CdAkkbm6e2RTDViwjM8Ay8VNHp9cUSbDua"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="Laravel Datatables basic demo">
    
    <title>Laravel Datatables  | Basic Demo</title>

    <link href="https://datatables.yajrabox.com/css/app.css" rel="stylesheet">
    <link href="https://datatables.yajrabox.com/css/demo.css" rel="stylesheet">
    <link href="https://datatables.yajrabox.com/css/datatables.bootstrap.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,800' rel='stylesheet'
          type='text/css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" href="https://datatables.yajrabox.com/highlight/styles/zenburn.css">
    <script src="https://datatables.yajrabox.com/highlight/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://datatables.yajrabox.com">
                <span class="dt-icon"><i class="fa fa-th-list"></i></span>
                Laravel Datatables</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="https://github.com/yajra/laravel-datatables"><strong><i class="fa fa-github"></i>
                            Github</strong></a></li>
                <li><a href="https://yajrabox.com/docs/laravel-datatables/6.0"><strong>Documentation</strong></a></li>
                <li><a href="https://www.patreon.com/bePatron?u=4521203"><strong>Become a Patreon</strong></a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right navbar-custom">
                                    <li><a href="https://datatables.yajrabox.com/auth/login">Login</a></li>
                    <li><a href="https://datatables.yajrabox.com/auth/register">Register</a></li>
                            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 main">
            <div class="search-box">
    <input id="search-filter" type="text" name="keyword" placeholder="Search ..">
</div>
<br>
<div class="panel panel-info">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- DT Ads -->
<ins class="adsbygoogle"
     style="display:inline-block;min-width:237px;max-width:237px;width:100%;height:90px;"
     data-ad-client="ca-pub-6330202459719817"
     data-ad-slot="1791872059"
     data-ad-format=""></ins>
<script>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<ul class="sidebar-menu-container">
    <li>
        <a class="sidebar-list-title block" data-toggle="collapse" data-target="#tutorials">Tutorials</a>
        <div id="tutorials" class="collapse in collapse-top in">
            <ul class="list-sub-items">
                <li><a class="keyword " href="https://datatables.yajrabox.com/starter">Quick Start</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/service">DataTables as a Service</a></li>
            </ul>
        </div>
    </li>
    <li>
        <a class="sidebar-list-title block" data-toggle="collapse" data-target="#eloquent">Eloquent</a>
        <div id="eloquent" class="collapse collapse-top in">
            <ul class="list-sub-items">
                <li><a class="keyword active" href="https://datatables.yajrabox.com/eloquent/basic">Basic</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/eloquent/basic-columns">Basic with Column Definition</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/eloquent/basic-object">Object Data Source</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/eloquent/row-details">Row Details</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/eloquent/master">Master-Details Table</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/eloquent/count">Count Alias</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/eloquent/multi-filter-select">Column Search</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/eloquent/post-column-search">Filter Column Search [via POST]</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/eloquent/add-edit-remove-column">Add/Edit/Remove Column</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/eloquent/dt-row">DT Row Option</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/eloquent/manual-count">Manual Counting of Records</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/eloquent/row-num">MySQL Row Num</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/eloquent/custom-filter">Overriding Global Filter</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/eloquent/advance-filter">Advance Global Filter [v5.1++]</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/eloquent/transformer">Fractal Transformer [v5.1++]</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/eloquent/carbon">DateTime/Carbon Objects</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/eloquent/ioc">IOC Container [v5.2++]</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/eloquent/blacklist">Blacklist Columns [v6.9++]</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/eloquent/whitelist">Whitelist Columns [v6.9++]</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/eloquent/order-column">Order Column API</a></li>
            </ul>
        </div>
    </li>
    <li>
        <a class="sidebar-list-title block" data-toggle="collapse" data-target="#queryBuilder">Query Builder</a>
        <div id="queryBuilder" class="collapse collapse-top in">
            <ul class="list-sub-items">
                <li><a class="keyword " href="https://datatables.yajrabox.com/fluent/basic">Basic</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/fluent/basic-object">Object Data Source</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/fluent/union">Union Queries</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/fluent/multi-filter-select">Column Search</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/fluent/advance-filter">Advance Global Filter [v5.1++]</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/fluent/add-edit-remove-column">Add/Edit/Remove Column</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/fluent/dt-row">DT Row Option</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/fluent/custom-filter">Custom Filter</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/fluent/carbon">DateTime/Carbon Objects</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/fluent/joins">Join Queries</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/fluent/ioc">IOC Container [v5.2++]</a></li>
            </ul>
        </div>
    </li>
    <li>
        <a class="sidebar-list-title block" data-toggle="collapse" data-target="#collection">Collection</a>
        <div id="collection" class="collapse collapse-top in">
            <ul class="list-sub-items">
                <li><a class="keyword " href="https://datatables.yajrabox.com/collection/array">Collection of Array Data Source</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/collection/object">Collection of Object Data Source</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/collection/github">Github API Data Source</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/collection/basic">Basic</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/collection/basic-object">Object Data Source</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/collection/multi-filter-select">Column Search</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/collection/add-edit-remove-column">Add/Edit/Remove Column</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/collection/dt-row">DT Row Option</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/collection/custom-filter">Custom Filter</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/collection/carbon">DateTime/Carbon Objects</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/collection/ioc">IOC Container [v5.2++]</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/collection/total-records">Set Total Records</a></li>
            </ul>
        </div>
    </li>
    <li>
        <a class="sidebar-list-title block" data-toggle="collapse" data-target="#htmlBuilder">HTML Builder</a>
        <div id="htmlBuilder" class="collapse collapse-top in">
            <ul class="list-sub-items">
                <li><a class="keyword " href="https://datatables.yajrabox.com/html/basic">Html Builder via Dependency Injection</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/html/method">Html Builder via Method Injection</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/html/columns">Html Builder with Plain Columns</a></li>
            </ul>
        </div>
    </li>
    <li>
        <a class="sidebar-list-title block" data-toggle="collapse" data-target="#eloquentRelations">Eloquent Relations</a>
        <div id="eloquentRelations" class="collapse collapse-top in">
            <ul class="list-sub-items">
                <li><a class="keyword " href="https://datatables.yajrabox.com/eloquent/relationships">Eager Loading</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/relation/has-one">Has One Eager Loading</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/relation/has-many">Has Many Eager Loading</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/relation/belongs-to">Belongs To Eager Loading</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/relation/belongs-to-many">Belongs To Many Eager Loading</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/relation/morph-to-many">Morph To Many Eager Loading</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/eloquent/has-many">HasMany Relationship</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/eloquent/joins">Join Queries</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/eloquent/with-trashed">With Trashed (Soft Deletes)</a></li>
            </ul>
        </div>
    </li>
    <li>
        <a class="sidebar-list-title block" data-toggle="collapse" data-target="#serviceImplementatuibs">Service Implementations</a>
        <div id="serviceImplementatuibs" class="collapse collapse-top in">
            <ul class="list-sub-items">
                <li><a class="keyword " href="https://datatables.yajrabox.com/services/basic">Basic Implementation</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/services/scope">DataTables Scoping</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/services/two-datatables">Two DataTables</a></li>
                <li><a class="keyword " href="https://datatables.yajrabox.com/services/users-with-footer">Footer Column Search</a></li>
            </ul>
        </div>
    </li>
</ul>
            <br>
            <div class="panel panel-default text-center">
    <div class="panel-heading">
        <h3 class="panel-title">Donations Appreciated</h3>
    </div>
    <div class="panel-body">
        <p>
            The simplest acts of kindness are by far more powerful then a thousand heads bowing in prayer. - Mahatma Gandhi
        </p>
        <a href='https://pledgie.com/campaigns/29515'><img alt='Click here to lend your support to: Laravel Datatables and make a donation at pledgie.com !' src='https://pledgie.com/campaigns/29515.png?skin_name=chrome' border='0' ></a>
    </div>
</div>
            <br>
            <div class="panel panel-info">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- DT Ads -->
<ins class="adsbygoogle"
     style="display:block;"
     data-ad-client="ca-pub-2399525660597307"
     data-ad-slot="2669626074"
     data-ad-format="auto"></ins>
<script>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>
            </div>
        </div>
        <div class="col-sm-9 main">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- DT Ads -->
<ins class="adsbygoogle"
     style="display:block;"
     data-ad-client="ca-pub-6330202459719817"
     data-ad-slot="8161306456"
     data-ad-format="auto"></ins>
<script>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>
            <div class="col-md-12">
                <h1 class="" style="">EloquentController.php - Basic Demo</h1>
<div class="tabs">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#demo">Demo</a></li>
        <li><a data-toggle="tab" href="#code">Source Code</a></li>
    </ul>
    <div class="tab-content">
         <div class="tab-pane active" id="demo">
            <table id="users-table" class="table table-condensed">
    <caption class="alert alert-success">
        <p>
            <strong>IMPORTANT: </strong>When using <strong>make()</strong>, the package will rely filtering and sorting based on the index/arrangement of your select query.
        </p>
        <br>
        <p>
            <strong>NEVER USE SELECT(*)</strong> when using this approach or your DataTables filtering/sorting may not work properly.
        </p>
    </caption>
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Created At</th>
        <th>Updated At</th>
    </tr>
    </thead>
</table>
        </div>
        <div class="tab-pane" id="code">
            <h3 class="lead">EloquentController.php</h3>
            <pre><code>    public function getBasic()
    {
        return view('datatables.eloquent.basic');
    }

    public function getBasicData()
    {
        $users = User::select(['id','name','email','created_at','updated_at']);

        return Datatables::of($users)->make();
    }
</code></pre>
            <h3 class="lead">Javascript</h3>
            <pre><code>    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'https://datatables.yajrabox.com/eloquent/basic-data'
        });
    });
</code></pre>
                    </div>
    </div>
</div>
                <hr>
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- DT Ads -->
<ins class="adsbygoogle"
     style="display:block;"
     data-ad-client="ca-pub-2399525660597307"
     data-ad-slot="4642873670"
     data-ad-format="auto"></ins>
<script>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>
                <hr>
                <div id="disqus_thread"></div>
            </div>
        </div>
    </div>
</div>

<script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
<script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
<script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
<script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>
<script src="https://datatables.yajrabox.com/js/handlebars.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.0.0/jquery.mark.min.js"></script>
<script>
    $(function () {
        var $input = $("input[name='keyword']"), $context = $(".keyword");
        $input.on("input", function () {
            var term = $(this).val();
            $context.show().unmark();
            if (term) {
                $context.mark(term, {
                    done: function () {
                        $context.not(":has(mark)").hide();
                    }
                });
            }
        });
        $('#search-filter').focus();
    });
</script>
<script type="text/javascript">
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'https://datatables.yajrabox.com/eloquent/basic-data'
        });
    });
</script>
    <script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-63183947-2', 'auto');
	ga('send', 'pageview');
</script><script>
     var disqus_config = function () {
         this.page.url = 'https://datatables.yajrabox.com/eloquent/basic';
         this.page.identifier = 'route.eloquent.basic';
     };

    (function() {  // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');

        s.src = '//yajrabox.disqus.com/embed.js';

        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\" rel=\"nofollow\">comments powered by Disqus.</a></noscript></body>
</html>
