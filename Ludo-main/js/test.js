function verif(){
	titre=document.f.titre.value;
	prix=document.f.prix.value;
	img=document.f.img.value;
	p_key_word=document.f.p_key_word.value;
	disponibilité=document.f.disponibilité.value;
	type=document.f.type.value;
	description=document.f.description.value;
	age=document.f.age.value;
	if(type=="" || disponibilité=="" || description=="" ||  age=="" || titre=="" || priX=="" || img=="" || p_key_word==""){
		alert("Tapez tous les elements !!");
	} 
}