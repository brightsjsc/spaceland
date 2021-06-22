<div class="project-related">
    <div class="project-header">
        <h3 class="title-pro">Khu vực Hà Nội</h3>  
    </div>
    <div class="project-list">
        <ul>
            @foreach ($productOfDistricts as $productOfDistrict)
                @if ($productOfDistrict['num_product'] > 0)
                    <li><i class="fas fa-angle-right"></i><a href="{{ route('productsOfDistrict',['district' => $productOfDistrict['alias']]) }}">{{ $productOfDistrict['level']." ".$productOfDistrict['name_local']."(".$productOfDistrict['num_product'].")" }}</a></li>
                @endif
            @endforeach
        </ul>
    </div>
</div>