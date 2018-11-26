<div class="row m-3">
    <form action="{{route('generateSitemap')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="col-12 p-2">
            <button type="submit" class="btn btn-success"><span>Сгенерировать Sitemap</span></button>
        </div>
    </form>
</div>