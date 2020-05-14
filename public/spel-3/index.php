
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Spelletjes-website | Snake Game</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<style>
	canvas {
		display: block;
		position: absolute;
		border: 5px solid  #009BFF;
		margin: auto;
		top: 0;
		bottom: 0;
		right: 0;
		left: 0;
	}
    h3 {
        text-align: center;
        margin-top:20px;
    }
    footer {
        position:absolute;
        bottom:-150px;
        width:100%;
        z-index:-1;
    }
	</style>
</head>
<body>

<?php require_once("../../private/shared/nav.php")?>

<div class="container-fluid">

    <h3>Snake</h3>

    <script>
    var
    COLS = 26,
    ROWS = 26,
    EMPTY = 0,
    SNAKE = 1,
    FRUIT = 2,
    LEFT  = 0,
    UP    = 1,
    RIGHT = 2,
    DOWN  = 3,
    KEY_LEFT  = 37,
    KEY_UP    = 38,
    KEY_RIGHT = 39,
    KEY_DOWN  = 40,
    canvas,
    ctx,
    keystate,
    frames,
    score;

    grid = {

        width: null,
        height: null,
        _grid: null,


        init: function(d, c, r) {
            this.width = c;
            this.height = r;

            this._grid = [];
            for (var x=0; x < c; x++) {
            this._grid.push([]);
            for (var y=0; y < r; y++) {
            this._grid[x].push(d);
            }
            }
        },


        set: function(val, x, y) {
            this._grid[x][y] = val;
        },


        get: function(x, y) {
            return this._grid[x][y];
        }
    }


    snake = {

        direction: null,
        last: null,
        _queue: null,


        init: function(d, x, y) {
            this.direction = d;

            this._queue = [];
            this.insert(x, y);
        },


        insert: function(x, y) {

            this._queue.unshift({x:x, y:y});
            this.last = this._queue[0];
        },


        remove: function() {

            return this._queue.pop();
        }
    };


    function setFood() {
        var empty = [];

        for (var x=0; x < grid.width; x++) {
            for (var y=0; y < grid.height; y++) {
            if (grid.get(x, y) === EMPTY) {
            empty.push({x:x, y:y});
            }
            }
        }

        var randpos = empty[Math.round(Math.random()*(empty.length - 1))];
        grid.set(FRUIT, randpos.x, randpos.y);
    }


    function main() {

        canvas = document.createElement("canvas");
        canvas.width = COLS*20;
        canvas.height = ROWS*20;
        ctx = canvas.getContext("2d");

        document.body.appendChild(canvas);


        ctx.font = "12px Helvetica";

        frames = 0;
        keystate = {};

        document.addEventListener("keydown", function(evt) {
            keystate[evt.keyCode] = true;
            evt.preventDefault();
        });
        document.addEventListener("keyup", function(evt) {
            delete keystate[evt.keyCode];
        });


        init();
        loop();
    }


    function init() {
        score = 0;

        grid.init(EMPTY, COLS, ROWS);

        var sp = {x:Math.floor(COLS/2), y:ROWS-1};
        snake.init(UP, sp.x, sp.y);
        grid.set(SNAKE, sp.x, sp.y);

        setFood();
    }


    function loop() {
        update();
        draw();

        window.requestAnimationFrame(loop, canvas);
    }


    function update() {
        frames++;


        if (keystate[KEY_LEFT] && snake.direction !== RIGHT) {
        snake.direction = LEFT;
        }
        if (keystate[KEY_UP] && snake.direction !== DOWN) {
        snake.direction = UP;
        }
        if (keystate[KEY_RIGHT] && snake.direction !== LEFT) {
        snake.direction = RIGHT;
        }
        if (keystate[KEY_DOWN] && snake.direction !== UP) {
        snake.direction = DOWN;
        }


        if (frames%7 === 0) {

        var nx = snake.last.x;
        var ny = snake.last.y;


        switch (snake.direction) {
        case LEFT:
        nx--;
        break;
        case UP:
        ny--;
        break;
        case RIGHT:
        nx++;
        break;
        case DOWN:
        ny++;
        break;
        }


        if (0 > nx || nx > grid.width-1  ||
        0 > ny || ny > grid.height-1 ||
        grid.get(nx, ny) === SNAKE
        ) {
        return init();
        }

        if (grid.get(nx, ny) === FRUIT) {

        score++;
        setFood();
        } else {

        var tail = snake.remove();
        grid.set(EMPTY, tail.x, tail.y);
        }

        grid.set(SNAKE, nx, ny);
        snake.insert(nx, ny);
        }
    }


    function draw() {

        var tw = canvas.width/grid.width;
        var th = canvas.height/grid.height;

        for (var x=0; x < grid.width; x++) {
        for (var y=0; y < grid.height; y++) {

        switch (grid.get(x, y)) {
        case EMPTY:
        ctx.fillStyle = "#fff";
        break;
        case SNAKE:
        ctx.fillStyle = "#333";
        break;
        case FRUIT:
        ctx.fillStyle = "#009BFF";
        break;
        }
        ctx.fillRect(x*tw, y*th, tw, th);
        }
        }

        ctx.fillStyle = "#000";
        ctx.fillText("SCORE: " + score, 10, canvas.height-10);
    }


    main();

    </script>

</div>


<?php require_once("../../private/shared/footer.php")?>





</body>
</html>