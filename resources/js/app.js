import confetti from 'canvas-confetti';
require('./bootstrap');

Livewire.on('confetti', () => {
    confetti({
        particleCount: 300,
        spread: 200,
        origin: {y: 0.6},
    });
})
