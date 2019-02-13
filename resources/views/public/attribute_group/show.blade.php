            @include('product::public.attribute_group.partial.header')

            <section class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('product::public.attribute_group.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="area">
                                <div class="item">
                                    <div class="feature">
                                        <img class="img-responsive center-block" src="{!!url($attribute_group->defaultImage('images' , 'xl'))!!}" alt="{{$attribute_group->title}}">
                                    </div>
                                    <div class="content">
                                        <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="id">
                    {!! trans('product::attribute_group.label.id') !!}
                </label><br />
                    {!! $attribute_group['id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="slug">
                    {!! trans('product::attribute_group.label.slug') !!}
                </label><br />
                    {!! $attribute_group['slug'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="name">
                    {!! trans('product::attribute_group.label.name') !!}
                </label><br />
                    {!! $attribute_group['name'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="order">
                    {!! trans('product::attribute_group.label.order') !!}
                </label><br />
                    {!! $attribute_group['order'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="created_at">
                    {!! trans('product::attribute_group.label.created_at') !!}
                </label><br />
                    {!! $attribute_group['created_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="updated_at">
                    {!! trans('product::attribute_group.label.updated_at') !!}
                </label><br />
                    {!! $attribute_group['updated_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="deleted_at">
                    {!! trans('product::attribute_group.label.deleted_at') !!}
                </label><br />
                    {!! $attribute_group['deleted_at'] !!}
            </div>
        </div>
    </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('product::attribute_group.label.name'))
                       -> placeholder(trans('product::attribute_group.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('order')
                       -> label(trans('product::attribute_group.label.order'))
                       -> placeholder(trans('product::attribute_group.placeholder.order'))!!}
                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



