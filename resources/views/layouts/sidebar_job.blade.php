<div class="sidebar">
    <div class="widget">
        <form action="{{ url('job_search') }}" method="post">
            @csrf
            <div class="search input-group md-form form-sm form-2 pl-0">
                <input name="search_string" class="form-control my-0 py-1 red-border" type="text" placeholder="Search Jobs ...">
                <div class="input-group-append">
                    <button type="submit" name="form_search">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="widget">
        <h3>{{ __('Job Categories')}}</h3><hr style="border: 3px dashed #59B300; border-radius: 5px;">
        <div class="type-1">
            <ul>
                @foreach($categories as $row)
                    <li><a href="{{ url('job_category/'.$row->category_slug) }}">{{ __($row->category_name) }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="widget">
        <h3>{{ __('Recent Jobs')}}</h3><hr style="border: 3px dashed #59B300; border-radius: 5px;">
        <div class="type-1">
            <ul>
                @php $i=0 @endphp
                @foreach($job_items_no_pagi as $row)
                    @php $i++ @endphp
                    @if($i > $g_setting->sidebar_total_recent_post)
                        @break
                    @endif
                    <li>
                        
                        <a href="{{ url('job/'.$row->job_slug) }}">{{ __($row->job_title) }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
