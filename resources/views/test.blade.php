<a href="/user">User</a>
<a href="/product">Product</a>
<a href="/news">News</a>
<a href="/service">Service</a>
<a href="/category">Category</a>
<hr>
<ul>
    <li><a href="/news/1/category/1">Bai viet so 1</a></li>
    <li><a href="/news/2/category/2">Bai viet so 2</a></li>
    <li><a href="/news/3/category/3">Bai viet so 3</a></li>
    <li><a href="/news/4/category/4">Bai viet so 4</a></li>
    <li><a href="/news/5/category/5">Bai viet so 5</a></li>
</ul>
<ul>
    <li><a href="{{ route('user')}}">User</a></li>
    <li><a href="{{ route('user')}}">User</a></li>
    <li><a href="{{ route('user')}}">User</a></li>
    <li><a href="{{ route('user')}}">User</a></li>
    <li><a href="{{ route('user')}}">User</a></li>
    <li><a href="{{ route('user')}}">User</a></li>
    <li><a href="{{ route('user')}}">User</a></li>
    <li><a href="{{ route('user')}}">User</a></li>
</ul>


<hr>
<h2>Route name co tham so truyen vao</h2>
<ul>
    <li><a href="{{ route('user.show',['id'=>'1']) }}">User detail 1</a></li>
    <li><a href="{{ route('user.show',['id'=>'2']) }}">User detail 2</a></li>
    <li><a href="{{ route('user.show',['id'=>'3']) }}">User detail 3</a></li>
</ul>
<hr>
<h2>Route name co tham so vaf parameter</h2>
<ul>
    <li><a href="{{ route('user.show.branch',['id'=>'bbb','branchId'=>1]) }}">1</a></li>
    <li><a href="{{ route('user.show.branch',['id'=>'aaa','branchId'=>2]) }}">2</a></li>
    <li><a href="{{ route('user.show.branch',['id'=>'nam','branchId'=>3]) }}">3</a></li>
    
</ul>
<hr>
<h2>Route group</h2>
<ul>
    <li><a href="{{ route('backend.user') }}">user management</a></li>
    <li><a href="{{ route('backend.product') }}">product management</a></li>
    <li><a href="{{ route('backend.category') }}">Category management</a></li>
    <li><a href="{{ route('backend.news') }}">News management</a></li>

</ul>