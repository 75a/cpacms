@extends ('layouts.landing-page')

@section('metatitle', $post->metatitle)
@section('metadescription', $post->metadescription)
@section('metaauthor', $post->metaauthor)

@section('logo_text', $post->logo_text)
@section('logo_src', $post->logo_src)

@section('nav-links')
    <a href="/" target="_blank" class="top-nav-link text-bold text-medium">
        Home
    </a>
    <a href="{{\Request::url()}}" class="top-nav-link text-bold text-medium top-nav-link-active">
        {{$post->menu_link_text}}
    </a>
    <a href="{{$post->menu_link_product_url}}" class="top-nav-link text-bold text-medium" rel="nofollow" target="_blank">
        {{$post->menu_link_product_name}}
    </a>
@endsection


@section('featured')
    <section class="featured-blue-background full featured h-auto">
        <div class="container featured-container-grid">
            <div class="featured-text-container">
                <header>
                    <h1 class="featured-header">{{$post->featured_header}}</h1>
                    <p class="featured-description">{{$post->featured_description}}</p>
                </header>
            </div>
            <div class="featured-image-container">
                <img src="{{$post->featured_image_src}}"
                     alt="{{$post->featured_image_alt}}" class="featured-image">
            </div>
        </div>

    </section>
@endsection


@section('main-sections')
    <!-- Description -->
    <div class="main-section-element">
        <h3 class="section-header">{{$post->article_header}}</h3>
        <div>
            <p class="text-default-color bottom-line pb-15">
                {!! $post->article_text !!}
            </p>
            <p class="share-us">
            <p class="text-default-color text-center share-us-txt">Share us on social media!</p>
            <p class="text-center share-us-icons">
                <a href="#" class="social-icon-link"><i class="fab fa-facebook facebook-color"></i></a>
                <a href="#" class="social-icon-link"><i class="fab fa-twitter twitter-color"></i></a>
            </p>

        </div>
    </div>
    <!-- Generator -->
    <div class="main-section-element">
        <h3 class="section-header">{{$post->generator_header}}</h3>
        <div id="generator-form">
            {!! $post->inputs !!}

            <div class="single-input-container">
                <button type="button" class="input-button" id="gen_btn"
                    data-postid="{{$post->id}}"
                    data-connecting="{{$post->connecting}}"
                    data-connected="{{$post->connected}}"
                    data-secondstep="{{$post->secondstep}}"
                    data-secondstepfinished="{{$post->secondstepfinished}}"
                    data-thirdstep="{{$post->thirdstep}}"
                    data-thirdsteperror = "{{$post->thirdsteperror}}"
                    data-thirdstepwaiting="{{$post->thirdstepwaiting}}"
                >Generate</button>
                <div id="gen_console" class="text-default-color">
                    <img src="images/spinner.gif" alt="" class="gen-spinner"> <span id="gen_text">Connecting...</span>
                </div>
                <div id="frecaptcha">
                    <div class="captcha-checkbox-container">
                        <button type="button" id="captcha_checkbox"></button>
                    </div>
                    <p class="im-not-a-robot">I'm not a robot</p>
                    <img src="/images/captcha_logo.png" alt="" class="captcha-logo">
                    <p class="captcha-desc">CAPTCHA</p>
                    <p class="captcha-desc">Privacy - Terms</p>
                    <img src="/images/spinner.gif" alt="" id="captcha_loading">
                </div>
                <div style="height: 1px;position:relative;">
                    <div id="offs_window">
                        <div class="offs-container">
                            <header class="offs-header">
                                <p class="offs-header-text-small">Choose and complete</p>
                                <p class="offs-header-text-big">One task</p>
                            </header>
                            <main class="offs-offs">
                                <div id="offs_list">
                                    <!--<a href="#" target="_blank" class="offs_single_off_button">Test offer</a>-->
                                </div>

                                <p id="offs_error">Please choose and complete one task from the list above.</p>
                            </main>

                        </div>
                        <footer class="offs-footer">
                            <div class="offs-footer-left-container">
                                After completing a task press the verify button to proceed.
                            </div>
                            <button type="button" id="offs_verify_btn">Verify</button>
                        </footer>


                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- Call to action with Proof -->
    <div class="main-section-element">
        <h3 class="section-header text-center pb-15">{{$post->call_to_action_header}}</h3>
        <div class="proof-images-container">
            <img src="{{$post->call_image1_src}}" alt="{{$post->call_image1_alt}}" class="proof-image">
            <img src="{{$post->call_image2_src}}" alt="{{$post->call_image2_alt}}" class="proof-image">
            <img src="{{$post->call_image3_src}}" alt="{{$post->call_image3_alt}}" class="proof-image">
        </div>
    </div>
@endsection

@section('aside')
    <!-- Comments -->
    <div class="main-section-element">
        <h3 class="section-header">Latest comments</h3>
        @foreach ($comments as $comment)
            <div class="comment-container">
                <img src="{{$comment->avatar}}" alt="User avatar" class="comment-avatar">
                <div class="comment-text-container">
                    <p class="text-default-color comment-meta">
                        <span class="comment-author">{{$comment->username}}</span>
                        <span class="comment-date">{{$comment->getRelativeDate()}}</span>
                    </p>
                    <p class="text-default-color">
                        {{$comment->text}}
                    </p>
                </div>
            </div>
        @endforeach
        @if (Auth::check())
        <form method="post" action="/comment">
            @csrf
            <input type="hidden" id="post_id" name="post_id" value="{{$post->id}}">
            <div class="single-input-container">
                <label for="username" class="input-label">Comment author (Leave empty to automatically choose a random username)</label>
                <input class="input-custom input-text" type="text" id="username" name="username"
                       placeholder="Comment author username goes here...">
            </div>
            <div class="single-input-container">
                <label for="avatar" class="input-label">Avatar</label>
                <input class="input-custom input-text" type="text" id="avatar" name="avatar"
                       placeholder="" value="{{env('CONTENTS_DEFAULTAVATAR')}}">
            </div>

            <!-- Dropdown -->
            <div class="single-input-container">
                <label for="day" class="input-label">Day of the week</label>
                <select id="day" name="day" class="input-custom input-dropdown">
                    <option value="1">Monday</option>
                    <option value="2">Tuesday</option>
                    <option value="3">Wednesday</option>
                    <option value="4">Thursday</option>
                    <option value="5">Friday</option>
                    <option value="6">Saturday</option>
                    <option value="7">Sunday</option>
                </select>
            </div>
            <!-- Dropdown -->
            <div class="single-input-container">
                <label for="hour" class="input-label">Hour</label>
                <select id="hour" name="hour" class="input-custom input-dropdown">
                    @for ($i = 0; $i <= 23; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
            </div>
            <div class="single-input-container">
                <label for="text" class="input-label">Comment</label>
                <textarea class="input-custom p-2 w-full" style="height:100px;" id="text" name="text"></textarea>
            </div>
            <button type="submit" class="input-button">Add comment</button>
        </form>

        @endif



    </div>
@endsection
