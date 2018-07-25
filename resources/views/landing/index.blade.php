@extends('layouts.app')

@section('content')
    @foreach($get_request as $row)
        <p>{{$row['title']}}</p>
        <p>{{$row[0]['img_name']}}</p>
    @endforeach
    <?php $img = $get_request[2]['img_name']; ?>
    @if ($img)
        {{ $img }}
    @else {{ 'no'}}
    @endif
    
    <section class="section-top" style="background-image: url('{{asset('images/'.$img)}}');">
        <img src="img/logo.png" class="logo-mid" >
       
{{--          {{$get_request[0]}} --}}
        <p class="slogan-name">WE LOVE CLINICS</p>
    </section>
        
    <section class="section-content doc-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-offset-6">
                    <h3 class="green-title">The Problem</h3>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-content doc-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="green-title">The Problem</h3>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-content phone-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/phone.png" class="img-center">
                </div>
                <div class="col-md-6">
                    <h3 class="green-title">The Problem</h3>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-content phone-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="green-title">The Problem</h3>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="img/laptop.png" class="img-center">
                </div>
            </div>
        </div>
    </section>

    <section class="section-content phone-1">
        <div class="container">
            <div class="contact-box">
                <div class="green-box">
                    <h3>Contact us</h3>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <ul class="social-contact">                                 
                        <li><a href="#"><img src="img/fb-icon.png"></a></li>
                        <li><a href="#"><img src="img/ig-icon.png"></a></li>
                    </ul>
                </div>
                <div class="col-md-7 col-md-offset-5">
                    <form>
                        <label>Name</label>
                        <input type="name" name="name">

                        <label>Email</label>
                        <input type="email" name="email">

                        <label>Message</label>
                        <textarea></textarea>

                        <button type="submit" class="submit-contact">Send</button>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
