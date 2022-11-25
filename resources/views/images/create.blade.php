@include('header')
<div>
    <div class="uk-section uk-section-secondary uk-light uk-margin-large-top">
        <div class="uk-container" uk-scrollspy="target: > div; cls: uk-animation-slide-left; delay: 500;">

            <div>
                <h3>S3 Upload Image</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit
                    amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div class="uk-grid-match uk-child-width-1-3@m" uk-grid uk-scrollspy="target: > div; cls: uk-animation-slide-bottom; delay: 500;">
                <div>
                    <form action="/upload" method="POST"
                        class="flex items-center justify-between border border-gray-300 p-4 rounded"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file" name="image" id="image">
                        <button type="submit" class="uk-button uk-button-secondary">Upload</button>
                    </form>
                </div>
                <div uk-scrollspy-class="uk-animation-slide-top">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                </div>

                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                </div>
            </div>

        </div>
    </div>
    <div class="uk-section">
        <div class="uk-container" uk-scrollspy="target: > div; cls: uk-animation-slide-right; delay: 500;">

            <div>
            <h3>S3 Bucket Files</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit
                amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div class="uk-grid-match uk-child-width-1-1@m" uk-grid>
                <div>
                    <ul class="uk-list uk-list-striped uk-margin-medium-top" uk-scrollspy="target: > li; cls: uk-animation-fade; delay: 500;">
                        @foreach ($images as $image)
                        <li class="uk-item">
                            <div class="uk-grid-match uk-child-width-1-4@m" uk-grid>
                                <div>
                                    <p>{{$image->filename}}</p>
                                </div>
                                <div></div>
                                <div></div>
                                <div>
                                    <a class="uk-button uk-button-default uk-margin-medium-left" href="/upload/{{$image->id}}">View
                                        File</a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>


            </div>

        </div>
    </div>
    <div class="uk-section uk-section-secondary uk-light">
        <div class="uk-container">

            <h3>Section Secondary</h3>

            <div class="uk-grid-match uk-child-width-1-3@m" uk-grid uk-scrollspy="target: > div; cls: uk-animation-slide-bottom; delay: 500;">
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                </div>
                <div uk-scrollspy-class="uk-animation-slide-top">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                </div>
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                </div>
            </div>

        </div>
    </div>
</div>

@include('footer')