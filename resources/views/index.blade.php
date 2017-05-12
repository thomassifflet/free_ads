@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                @if (Auth::user())
                    <img src="//www.gravatar.com/avatar/{{ md5($user->email) }} ?s=125" alt="gravatar user" class="home-image">
                    Bienvenue sur Free Ads, <strong>{{ Auth::user()->name }}</strong>
                @endif
                <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at consectetur consequatur dicta dolor eveniet fuga fugit harum in laborum magni non officia pariatur, quas quo repellat similique vel voluptates.</span><span>Amet explicabo necessitatibus optio recusandae rerum voluptates voluptatum. Autem consectetur ex libero molestiae rerum. Aliquid, error eveniet ipsum libero magni molestias nulla porro possimus provident quas recusandae totam vitae, voluptates!</span><span>Aliquam dolore magnam nobis repellat tempora? Est fuga, ipsam officiis optio quia quisquam similique temporibus. Architecto delectus fuga non odit, qui quos sunt vero. Accusamus maiores molestiae omnis placeat quaerat!</span><span>Blanditiis eligendi error est officiis perspiciatis reiciendis sed temporibus. Adipisci corporis dolorem ea eaque exercitationem iure magni, maiores nemo neque recusandae, repudiandae rerum ullam voluptatem. Dignissimos distinctio libero nemo numquam.</span><span>Architecto aspernatur at autem beatae commodi deleniti dicta dolores dolorum ea esse facere facilis hic inventore iste itaque, minus natus neque pariatur perferendis placeat sequi similique totam unde vel vitae.</span><span>A amet deleniti error eveniet excepturi maiores molestias quia quod rerum ut. Amet dignissimos, doloribus, dolorum eligendi ipsa iste itaque magnam minus necessitatibus quam repellendus rerum sint suscipit vitae voluptatum.</span><span>Ad blanditiis corporis, deleniti dolores excepturi fuga, hic incidunt labore maxime nobis perferendis perspiciatis provident, quidem quis quod sint tempora voluptatem. Accusamus adipisci atque dolorem dolores earum et id, ullam.</span><span>A beatae cumque dicta fugit, illo labore laborum perferendis quae, reiciendis tempora tenetur voluptas. A accusamus animi culpa ipsum, magnam nesciunt quo ratione! Ad aut deleniti dolores exercitationem maxime sequi?</span><span>Accusamus, aliquid asperiores blanditiis consequuntur distinctio dolor dolore dolorem esse et eveniet excepturi facilis in laboriosam magnam maiores modi molestias necessitatibus nihil nobis obcaecati possimus quidem quisquam reiciendis. Odio, soluta.</span><span>Commodi cum delectus ex fugit molestias nemo porro quaerat similique tempora tenetur. Eaque expedita id inventore itaque laborum perspiciatis reiciendis, reprehenderit. Atque eius enim illo iusto maxime nihil optio velit.</span></p>
            </div>

        </div>

    </div>


@endsection
