<ul class="hm-dropdown">
    @foreach (var item in Model)
    {
        <li><a href="@Url.Action("CuaHang", "Home", new { id = item.MaDanhMuc })">@item.TenDanhMuc</a></li>
    }
</ul>

