            @include('product::public.attribute_group.partial.header')

            <section class="grid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('product::public.attribute_group.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="main-area parent-border list-item">
                                @foreach($attribute_groups as $attribute_group)
                                <div class="item border">
                                    <div class="feature">
                                        <a href="{{trans_url('attribute_groups')}}/{{@$attribute_group['slug']}}">
                                            <img src="{{url($attribute_group->defaultImage('images'))}}" class="img-responsive center-block" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4><a href="{{trans_url('attribute_group')}}/{{$attribute_group['slug']}}">{{str_limit($attribute_group['title'], 300)}}</a> 
                                        </h4>
                                        <div class="metas mt20">
                                            <div class="tag pull-left">
                                                <a href="#" class="">Seo Tips</a>
                                            </div>
                                            <div class="date-time pull-right">
                                                <span><i class="fa fa-comments"></i>{{@$attribute_group->viewcount}}</span>
                                                <span><i class="fa fa-calendar"></i>{{format_date($attribute_group['posted_on'])}}</span>
                                            </div>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="author">
                                            <div class="avatar pull-left">
                                                {{@$attribute_group->user->badge}}
                                            </div>
                                            <div class="actions">
                                                

                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                @endforeach
                            </div>
                            <div class="pagination text-center">
                            {{ $attribute_groups->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </section> 