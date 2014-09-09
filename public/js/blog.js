var posts = [
  {
    'date': '20131006',
    'title': 'Unary operator, its not what you think...',
    'content': 'Thundercats literally fanny pack magna, retro banh mi mustache. Readymade polaroid fugiat Marfa sapiente. Four loko quinoa commodo, sint disrupt Tumblr slow-carb velit exercitation aliqua chambray DIY. Ugh Intelligentsia slow-carb beard fugiat ad, art party chillwave chia twee sapiente craft beer. Distillery Bushwick lomo shabby chic, church-key typewriter sunt Tonx Truffaut cardigan mollit. Sint Schlitz narwhal keffiyeh. Mumblecore seitan biodiesel, hashtag fashion axe Vice organic stumptown.',
  },
  {
    'date':'20121006',
    'title': "downfall = beatles.split('yoko')",
    'content': 'Are you so desperate to fight criminals that you lock yourself in to take them on one at a time ?When a forest grows too wild, a purging fire is inevitable and natural. Tomorrow the world will watch in horror as its greatest city destroys itself. The movement back to harmony will be unstoppable this time.Thats a lovely lovely voice!You wanna know how I got them? So I had a wife. She was beautiful, like you, who tells me I worry too much, who tells me I ought to smile more, who gambles and gets in deep with the sharks. Hey. One day they carve her face. And we have no money for surgeries. She cant take it. I just wanna see her smile again. I just want her to know that I dont care about the scars. So, I do this to myself. And you know what? She cant stand the sight of me. She leaves. Now I see the funny side. Now Im always smiling.Im not sure you made it loud enough, sir.How about a magic trick? Im gonna make this pencil disappear. Ta-da!You see? Its the slow knife. The knife that takes its time. The knife that waits years, without forgetting, then slips quietly between the bones, thats the knife that cuts the deepest.Ah yes! I was wondering what would weight first. Your spirit... or your body?It doesnt matter who we are. What matters is our plan.You wanna know how I got these scars? My father was... a drinker, and a fiend. And one night, he goes off crazier than usual. Mommy gets the kitchen knife to defend herself. He doesnt like that, not one bit. So, me watching he takes the knife to her, laughing while he does it. He turns to me and he says: "Why so serious?". He comes at me with the knife "Why so serious?". He sticks the blade in my mouth. "Lets put a smile on that face." and... Why so serious?You either die a hero or you live long enough to see yourself become the villain.I am the League of Shadows.',
  },
];

var myhtml = '';

// foreeach concat
posts.forEach(function(post,index,posts){
  var date = moment(post.date, 'YYYYMMDD').fromNow();
  myhtml += '<h1 id="fancy-font">' + post.title + '</h1>';
  myhtml += '<h4>' + date +'</h4>';
  myhtml += '<p>' + post.content + '</p>';

  console.log(date + posts.title+ posts.content);
});

// get blog area by id
document.getElementById('blogPost').innerHTML = myhtml;
// set inner html to html variable created above
