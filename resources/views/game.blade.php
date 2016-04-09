@extends('layouts.likerun')

@section('content')
<canvas id="game"></canvas>
<script type="text/javascript" src="phaser.js"></script>
<script type="text/javascript">
var game = new Phaser.Game(800, 600, Phaser.AUTO, '', { preload: preload, create: create, update: update });

function preload() {

    game.load.baseURL = 'http://examples.phaser.io/assets/';
    game.load.crossOrigin = 'anonymous';

    game.load.image('phaser', 'sprites/phaser-dude.png');
}

function create() {
	var sprite = game.add.sprite(400, 500, 'phaser');
	 
}

function update() {
}

</script>
@endsection