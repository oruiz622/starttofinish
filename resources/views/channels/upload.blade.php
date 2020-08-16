@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <channel-uploads :channel="{{ $channel }}" inline-template>
                <div class="col-md-8">
                    <div class="card p-3 d-flex justify-content-center align-items-center" v-if="!selected">
                        <svg onclick="document.getElementById('video-files').click()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="96px" height="96px"><linearGradient id="aMgqJ3th2OJXir222khUTa" x1="32" x2="32" y1="9.083" y2="54.676" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#1a6dff"/><stop offset="1" stop-color="#c822ff"/></linearGradient><path fill="url(#aMgqJ3th2OJXir222khUTa)" d="M50,55H14c-2.757,0-5-2.243-5-5V14c0-2.757,2.243-5,5-5h36c2.757,0,5,2.243,5,5v36 C55,52.757,52.757,55,50,55z M14,11c-1.654,0-3,1.346-3,3v36c0,1.654,1.346,3,3,3h36c1.654,0,3-1.346,3-3V14c0-1.654-1.346-3-3-3H14 z"/><linearGradient id="aMgqJ3th2OJXir222khUTb" x1="32" x2="32" y1="16" y2="26" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#6dc7ff"/><stop offset="1" stop-color="#e6abff"/></linearGradient><path fill="url(#aMgqJ3th2OJXir222khUTb)" d="M33,26h-2c-1.105,0-2-0.895-2-2v-6c0-1.105,0.895-2,2-2h2c1.105,0,2,0.895,2,2v6 C35,25.105,34.105,26,33,26z M31.5,24h1c0.276,0,0.5-0.224,0.5-0.5v-5c0-0.276-0.224-0.5-0.5-0.5h-1c-0.276,0-0.5,0.224-0.5,0.5v5 C31,23.776,31.224,24,31.5,24z"/><linearGradient id="aMgqJ3th2OJXir222khUTc" x1="39" x2="39" y1="16" y2="26" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#6dc7ff"/><stop offset="1" stop-color="#e6abff"/></linearGradient><path fill="url(#aMgqJ3th2OJXir222khUTc)" d="M40,26h-2c-1.105,0-2-0.895-2-2v-7.5c0-0.276,0.224-0.5,0.5-0.5h1c0.276,0,0.5,0.224,0.5,0.5 V24h2v-7.5c0-0.276,0.224-0.5,0.5-0.5h1c0.276,0,0.5,0.224,0.5,0.5V24C42,25.105,41.105,26,40,26z"/><linearGradient id="aMgqJ3th2OJXir222khUTd" x1="24.5" x2="24.5" y1="13" y2="26" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#6dc7ff"/><stop offset="1" stop-color="#e6abff"/></linearGradient><path fill="url(#aMgqJ3th2OJXir222khUTd)" d="M26,13.5V19h-3v-5.5c0-0.276-0.224-0.5-0.5-0.5h-1c-0.276,0-0.5,0.224-0.5,0.5V19 c0,1.105,0.895,2,2,2h3v3h-4.5c-0.276,0-0.5,0.224-0.5,0.5v1c0,0.276,0.224,0.5,0.5,0.5H26c1.105,0,2-0.895,2-2V13.5 c0-0.276-0.224-0.5-0.5-0.5h-1C26.224,13,26,13.224,26,13.5z"/><linearGradient id="aMgqJ3th2OJXir222khUTe" x1="32" x2="32" y1="28.003" y2="50.838" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#6dc7ff"/><stop offset="1" stop-color="#e6abff"/></linearGradient><path fill="url(#aMgqJ3th2OJXir222khUTe)" d="M49.62,33.95c-0.33-3.11-2.91-5.53-6.13-5.76c-3.54-0.25-19.44-0.25-22.98,0 c-3.22,0.23-5.8,2.65-6.13,5.75C14.13,36.27,14,38.14,14,39.5s0.13,3.23,0.38,5.55c0.33,3.11,2.91,5.53,6.13,5.76 C22.28,50.94,27.14,51,32,51s9.72-0.06,11.49-0.19c1.61-0.11,3.06-0.78,4.15-1.8c1.09-1.02,1.82-2.41,1.98-3.96 C49.87,42.73,50,40.86,50,39.5S49.87,36.27,49.62,33.95z M23,45.5c0,0.28-0.22,0.5-0.5,0.5h-1c-0.28,0-0.5-0.22-0.5-0.5V35h-2.5 c-0.28,0-0.5-0.22-0.5-0.5v-1c0-0.28,0.22-0.5,0.5-0.5h7c0.28,0,0.5,0.22,0.5,0.5v1c0,0.28-0.22,0.5-0.5,0.5H23V45.5z M31,44 c0,1.1-0.9,2-2,2h-2c-1.1,0-2-0.9-2-2v-7.5c0-0.28,0.22-0.5,0.5-0.5h1c0.28,0,0.5,0.22,0.5,0.5V44h2v-7.5c0-0.28,0.22-0.5,0.5-0.5h1 c0.28,0,0.5,0.22,0.5,0.5V44z M38,44c0,1.1-0.9,2-2,2h-2c-1.1,0-2-0.9-2-2V33.5c0-0.28,0.22-0.5,0.5-0.5h1c0.28,0,0.5,0.22,0.5,0.5 V36h2c1.1,0,2,0.9,2,2V44z M45,40c0,1.1-0.9,2-2,2h-2v2h2v-0.5c0-0.28,0.22-0.5,0.5-0.5h1c0.28,0,0.5,0.22,0.5,0.5V44 c0,1.1-0.9,2-2,2h-2c-1.1,0-2-0.9-2-2v-6c0-1.1,0.9-2,2-2h2c1.1,0,2,0.9,2,2V40z"/><linearGradient id="aMgqJ3th2OJXir222khUTf" x1="35" x2="35" y1="28" y2="50.836" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#6dc7ff"/><stop offset="1" stop-color="#e6abff"/></linearGradient><path fill="url(#aMgqJ3th2OJXir222khUTf)" d="M36,38.5v5c0,0.28-0.22,0.5-0.5,0.5h-1c-0.28,0-0.5-0.22-0.5-0.5v-5c0-0.28,0.22-0.5,0.5-0.5 h1C35.78,38,36,38.22,36,38.5z"/><linearGradient id="aMgqJ3th2OJXir222khUTg" x1="42" x2="42" y1="28" y2="50.836" gradientUnits="userSpaceOnUse" spreadMethod="reflect"><stop offset="0" stop-color="#6dc7ff"/><stop offset="1" stop-color="#e6abff"/></linearGradient><path fill="url(#aMgqJ3th2OJXir222khUTg)" d="M43,38.5v1c0,0.28-0.22,0.5-0.5,0.5h-1c-0.28,0-0.5-0.22-0.5-0.5v-1c0-0.28,0.22-0.5,0.5-0.5 h1C42.78,38,43,38.22,43,38.5z"/></svg>
                        <input type="file" multiple id="video-files" style="display: none;" ref="videos" @change="upload">
                        <p class="text-center">Upload Videos</p>
                    </div>

                    <div class="card p-3" v-else>
                        <div class="my-4" v-for="video in videos">
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" :style="{ width: `${video.percentage || progress[video.name]}%` }" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    @{{ video.percentage ? 'Processing' : 'Uploading' }}
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-4">
                                    <div v-if="!video.thumbnail" class="d-flex justify-content-center align-items-center" style="height: 180px; color: white; font-size: 18px; background: #808080;">
                                        Loading thumbnail ...
                                    </div>
                                    <img v-else :src="video.thumbnail" style="width: 100%;" alt="Thumbnail image of downloaded video.">
                                </div>

                                <div class="col-md-4">
                                    <a v-if="video.percentage && video.percentage === 100" target="_blank" :href="`/videos/${video.id}`">
                                        @{{ video.title }}
                                    </a>
                                    <h4 v-else class="text-center">
                                        @{{ video.title || video.name }}
                                    </h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </channel-uploads>
        </div>
    </div>
@endsection
