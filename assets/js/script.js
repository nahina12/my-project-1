<script>
    
// Mobile nav toggle
const navToggle = document.getElementById('nav-toggle');
const nav = document.querySelector('.nav');
if(navToggle){
    navToggle.addEventListener('click', ()=>{nav.classList.toggle('open')});
}
// Optional: Rotate cards on mouse move
const cards = document.querySelectorAll('.card, .skill');

cards.forEach(card => {
    card.addEventListener('mousemove', e => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        const cx = rect.width/2;
        const cy = rect.height/2;
        const dx = x - cx;
        const dy = y - cy;
        card.style.transform = `rotateY(${dx/10}deg) rotateX(${-dy/10}deg)`;
    });
    card.addEventListener('mouseleave', () => {
        card.style.transform = `rotateY(0deg) rotateX(0deg)`;
    });
});

</script>