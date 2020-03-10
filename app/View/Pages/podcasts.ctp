<section class="hero with-background-image"
         style="background-image: url('/dfcusa-web/app/webroot/img/img_hedr_teachers.png');">
  <div class="hero-container">
    <h4 class="heading">Build awareness and empathy.</h4>
  </div>
</section>

<section class="page-content mb-5">
    <div class="container">
      <h2 class="heading-secondary">Social Causes Podcasts</h2>

      <p class="mb-4">Your students can choose a social cause to learn about through a podcast. These podcasts are under 10 minutes and have an accompanying presentation to introduce the topic to your students and get their brainstorming juices flowing!
      </p>

      <div id="podcasts-container" class="row">
      </div>
    </div>
  </section>

  <section class="cta py-5 cta-ending reverse">
      <div class="container my-3">
          <div class="mb-4">
              <h2 class="heading text-secondary">Ready to move forward? It's free...</h2>
          </div>
          <a class="btn btn-secondary btn-lg" href="/dfcusa-pm/login#register">REGISTER</a>
      </div>
  </section>

<script type="text/mustache-template" id="podcastCatalogCard">
  <div class="col-lg-4">
    <div class="card podcast-block extended">
      <div class="global-goal"><img src="{{global_goal_image}}"></div>
      <div class="podcast-img" style="background-image: url('{{picture}}'); background-size: 100%; background-repeat: no-repeat"></div>
      <div class="podcast-brief">
        <a href="{{url}}" target="_new" class="podcast-title">{{name}}</a>
        <p class="description">{{description}}</p>

        <div class="details">
          <span class="content"><b>Duration:</b> {{duration}}</span>
          <span class="content"><b>Difficulty:</b> {{difficulty}}</span>
          <span class="content"><b>Global Goal(s):</b> {{global_goal}}</span>
          {{#if_notempty sponsor_logo}}
            <span class="content"><b>Sponsored By:</b> <a href="{{sponsor_url}}" target="_new">{{sponsor_name}}</a></span>
          {{/if_notempty}}
        </div>
      </div>

      <a class="btn btn-primary center play-podcast" href="/dfcusa-pm/podcasts#view/{{short_name}}" data-sprint="{{id}}" data-shortname="{{short_name}}">Preview Episode</a>

      {{#if_notempty sponsor_logo}}
        <div class="sponsor-logo"><img src="{{sponsor_logo}}"/></div>
      {{/if_notempty}}

    </div>
  </div>
</script>

<script type="text/javascript">
  $(document).ready(function() {
    Handlebars.registerHelper('if_eq', function(a, b, opts) {
      if(a == b)
        return opts.fn(this);
      else
        return opts.inverse(this);
    });

    Handlebars.registerHelper('if_notempty', function(a, opts) {
      if (((a != null) && (a != '') && (a != 'false') && (a != undefined) && (a != false) && (a != '"[]"')) || (a == '0.00')) {
        return opts.fn(this);
      } else {
        return opts.inverse(this);
      }
    });

    $.get("/dfcusa-web/app/webroot/assets/podcasts.json", function(data) {
      _.each(data, function(podcast) {
        var template = Handlebars.compile($('#podcastCatalogCard').html());
        var html = template(podcast);
        $('#podcasts-container').append(html);
      });
    });
  });
</script>