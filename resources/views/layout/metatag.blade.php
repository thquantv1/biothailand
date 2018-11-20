{{-- include this page to view with
//@param : instance of pageSetting class
//make sure that your pageSetting datatalbe had rows with keyname below
//1.page_description
//2.keyword
//3.Search_pagename
//4.page_picture  -> this must be absolute path
//5.title
 --}}
<meta name="description" content="{{$cauhinh->valueof('page_description')}}">
<meta name="keywords" content="{{$cauhinh->valueof('keyword')}}">

<!-- Google / Search Engine Tags -->
<meta itemprop="name" content="{{$cauhinh->valueof('Search_pagename')}}">
<meta itemprop="description" content="{{$cauhinh->valueof('page_description')}}">
<meta itemprop="image" content="{{asset($cauhinh->valueof('page_picture'))}}">

<!-- Facebook Meta Tags -->
<meta property="og:url" content="{{ asset('') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{$cauhinh->valueof('title')}}">
<meta property="og:description" content="{{$cauhinh->valueof('page_description')}}">
<meta property="og:image" content="{{asset($cauhinh->valueof('page_picture'))}}">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="{{$cauhinh->valueof('Search_pagename')}}">
<meta name="twitter:title" content="{{$cauhinh->valueof('title')}}">
<meta name="twitter:description" content="{{$cauhinh->valueof('page_description')}}">
<meta name="twitter:image" content="{{asset($cauhinh->valueof('page_picture'))}}">
