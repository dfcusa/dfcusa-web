<section class="hero with-background-image"
         style="background-image: url('/dfcusa-web/app/webroot/img/img_hedr_teachers.png');">
  <div class="hero-container">
    <h4 class="heading">Activities to Foster Empathy and Action</h4>
  </div>
</section>

<section class="page-content mb-5">
    <div class="container">
      <h2 class="heading-secondary">Listen to a podcast, brainstorm ideas, make it happen!</h2>

      <p class="mb-5">Choose a social cause to learn about and then select the <a href="/pages/get-started">activity path</a> that works for you and your students. These podcasts are under 10 minutes and introduce the topic to your students and get their brainstorming juices flowing!
      </p>

      <div id="podcasts-container" class="row mt-5">
      </div>
    </div>
  </section>

  <section class="cta py-5 cta-ending reverse">
      <div class="container my-3">
          <div class="mb-4">
              <h2 class="heading text-secondary">Ready to move forward? It's free...</h2>
          </div>
          <a class="btn btn-secondary btn-lg" href="http://pm.designforchange.us/">REGISTER</a>
      </div>
  </section>

<script type="text/mustache-template" id="podcastCatalogCard">
  <div class="col-lg-4 podcast-col">
    {{#if_datelessthandays published 30}}
      <div class="podcast-new"><img src="/dfcusa-pm/app/webroot/img/ico_new.png"></div>
    {{/if_datelessthandays}}

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

    Handlebars.registerHelper('if_datelessthandays', function(a, b, opts) {
      now = moment(new Date());
      end = moment.unix(a);
      duration = moment.duration(now.diff(end));
      days = duration.asDays();
      if (days <= b) {
        return opts.fn(this);
      } else {
        return opts.inverse(this);
      }
    });

    $.get("https://dfc-podcasts.s3.amazonaws.com/podcasts.json", function(data) {
      _.each(data, function(podcast) {
        var template = Handlebars.compile($('#podcastCatalogCard').html());
        var html = template(podcast);
        $('#podcasts-container').append(html);
      });
    });
  });
</script>