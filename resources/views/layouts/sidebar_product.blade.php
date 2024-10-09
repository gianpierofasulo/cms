<div class="sidebar">
    <div class="widget">
        <form action="{{ url('product_search') }}" method="post">
            @csrf
            <div class="search input-group md-form form-sm form-2 pl-0">
                <input name="search_string" class="form-control my-0 py-1 red-border" type="text" placeholder="Search Product ...">
                <div class="input-group-append">
                    <button type="submit" name="form_search">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="widget">
        <h3>{{ __('Categories')}}</h3><hr style="border: 3px dashed #59B300; border-radius: 5px;">
        <div class="type-1">
           <!--  <ul>
                @foreach($categories as $row)
                    <li><a href="{{ url('product_category/'.$row->category_slug) }}">{{ __($row->category_name) }}</a></li>
                @endforeach
            </ul> -->

           <!--  <ul>
    @foreach($categoriesWithSubCategories as $parentCategory)
        <li>
            <a href="{{ url('product_category/'.$parentCategory->category_slug) }}">
                {{ __($parentCategory->category_name) }}

                @if($parentCategory->subCategories->count() > 0)
                    <span class="badge badge-primary badge-pill">{{ $parentCategory->subCategories->count() }}</span>
                @endif
            </a>
            @if($parentCategory->subCategories->count() > 0)
                <ul>
                    @foreach($parentCategory->subCategories as $subCategory)
                        <li>
                            <a href="{{ url('product_category/'.$subCategory->category_slug) }}">
                                {{ __($subCategory->category_name) }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul> -->

<select class="form-control" id="categoryDropdown">
    @foreach($categoriesWithSubCategories as $parentCategory)
    <option value="{{ $parentCategory->category_slug }}">
        {{ __($parentCategory->category_name) }}
        @if($parentCategory->subCategories->count() > 0)
        ({{ $parentCategory->subCategories->count() }})
        @endif

        @if($parentCategory->subCategories->count() > 0)
        @foreach($parentCategory->subCategories as $subCategory)
        <option style="color: gray; font-size: 14px" class="text-center my-4" value="{{ $subCategory->category_slug }}" class="pl-3">
            &nbsp;&nbsp;&nbsp;{{ __($subCategory->category_name) }}
        </option>
        @endforeach
        @endif

    </option>
    
    @endforeach
</select>

<script>
    document.getElementById('categoryDropdown').addEventListener('change', function() {
        let categoryId = this.value;
        let url = "{{ url('product_category') }}/" + categoryId;
        window.location.href = url;
    });
</script>

<!-- <ul class="nav">
    @foreach($categoriesWithSubCategories as $parentCategory)
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ url('product_category/'.$parentCategory->category_slug) }}" id="navbarDropdown{{ $parentCategory->id }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ __($parentCategory->category_name) }} 
                @if($parentCategory->subCategories->count() > 0)
                    <span class="badge badge-primary badge-pill">{{ $parentCategory->subCategories->count() }}</span>
                @endif
            </a>
            @if($parentCategory->subCategories->count() > 0)
                <div class="dropdown-menu" aria-labelledby="navbarDropdown{{ $parentCategory->id }}">
                    @foreach($parentCategory->subCategories as $subCategory)
                        <a class="dropdown-item" href="{{ url('product_category/'.$subCategory->category_slug) }}">
                            {{ __($subCategory->category_name) }}
                        </a>
                    @endforeach
                </div>
            @endif
        </li>
    @endforeach
</ul> -->


</div>
</div>
<div class="widget">
    <h3>{{ __('Recent Products')}}</h3><hr style="border: 3px dashed #59B300; border-radius: 5px;">
    <div class="type-2">
        <ul>
            @php $i=0 @endphp
            @foreach($product_items_no_pagi as $row)
            @php $i++ @endphp
            @if($i > $g_setting->sidebar_total_recent_post)
            @break
            @endif
            <li>
                <img src="{{ asset('public/uploads/'.$row->product_featured_photo) }}">
                <a href="{{ url('product/'.$row->product_slug) }}">{{ __($row->product_name) }}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
</div>
