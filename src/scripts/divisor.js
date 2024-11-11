const gutter = document.getElementById('gutter');
            const panel1 = document.getElementById('panel1');
            const panel2 = document.getElementById('panel2');
    
            gutter.addEventListener('mousedown', function(e) {
                e.preventDefault();
                
                const startX = e.clientX;
                const startPanel1Width = panel1.getBoundingClientRect().width;
                const startPanel2Width = panel2.getBoundingClientRect().width;
                const totalWidth = startPanel1Width + startPanel2Width;
    
                function onMouseMove(e) {
                    const dx = e.clientX - startX;
                    const newPanel1Width = ((startPanel1Width + dx) / totalWidth) * 100;
                    const newPanel2Width = 100 - newPanel1Width;
    
                    if (newPanel1Width >= 16 && newPanel2Width >= 40) { // Limite mínimo de 10% para os painéis
                        panel1.style.width = `${newPanel1Width}%`;
                        panel2.style.width = `${newPanel2Width}%`;
                    }
                }
    
                function onMouseUp() {
                    document.removeEventListener('mousemove', onMouseMove);
                    document.removeEventListener('mouseup', onMouseUp);
                }
    
                document.addEventListener('mousemove', onMouseMove);
                document.addEventListener('mouseup', onMouseUp);
            });