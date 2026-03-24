<div class="container-fluid py-4">
<hr>
<!-- PROFILE STRENGTH -->
<h6 class="text-start"><i class="bi bi-bar-chart"></i> Profile Strength</h6>
<div class="progress mb-3">
    <div class="progress-bar bg-success" id="profileStrength" style="width: 60%">
        60%
    </div>
</div>

<!-- INTRO VIDEO -->
<h6 class="text-start"><i class="bi bi-camera-video"></i> Intro Video</h6>
<input type="file" class="form-control mb-2" accept="video/*" onchange="previewVideo(event)">

<video id="videoPreview" controls class="w-100 mb-3" style="display:none;"></video>

<!-- SKILLS -->
<h6 class="text-start"><i class="bi bi-lightbulb"></i> Skills</h6>

<div class="input-group mb-2">
    <input type="text" id="skillInput" class="form-control" placeholder="Add skill">
    <button class="btn btn-primary" onclick="addSkill()">Add</button>
</div>

<div id="skillsContainer" class="mb-3"></div>

<!-- EXPERIENCE -->
<h6 class="text-start"><i class="bi bi-briefcase"></i> Experience</h6>

<ul class="list-group mb-3 small">
    <li class="list-group-item">Web Developer - 3 Years</li>
    <li class="list-group-item">SEO Expert - 2 Years</li>
</ul>

<!-- PORTFOLIO -->
<h6 class="text-start"><i class="bi bi-images"></i> Portfolio</h6>
<input type="file" class="form-control mb-2" multiple onchange="previewPortfolio(event)">

<div id="portfolioPreview" class="d-flex flex-wrap"></div>

<!-- RATING BREAKDOWN -->
<h6 class="text-start mt-3"><i class="bi bi-star"></i> Rating</h6>

<div class="small">
    5 ⭐ <div class="progress mb-1"><div class="progress-bar bg-success" style="width:80%"></div></div>
    4 ⭐ <div class="progress mb-1"><div class="progress-bar bg-info" style="width:60%"></div></div>
    3 ⭐ <div class="progress mb-1"><div class="progress-bar bg-warning" style="width:30%"></div></div>
</div>

<!-- QUICK ACTIONS -->
<div class="mt-3">
    <button class="btn btn-outline-success w-100 mb-2">Approve Service</button>
    <button class="btn btn-outline-danger w-100">Reject Service</button>
</div>
</div>
<script>

// 🎥 VIDEO PREVIEW
function previewVideo(event){
    let video = document.getElementById("videoPreview");
    video.src = URL.createObjectURL(event.target.files[0]);
    video.style.display = "block";
}

// 🧠 ADD SKILL
function addSkill(){
    let input = document.getElementById("skillInput");
    let skill = input.value.trim();

    if(skill === "") return;

    let badge = document.createElement("span");
    badge.className = "badge bg-primary m-1";
    badge.innerHTML = skill + ' <i class="bi bi-x" onclick="this.parentElement.remove()"></i>';

    document.getElementById("skillsContainer").appendChild(badge);

    input.value = "";

    updateProfileStrength();
}

// 📂 PORTFOLIO PREVIEW
function previewPortfolio(event){
    let container = document.getElementById("portfolioPreview");
    container.innerHTML = "";

    Array.from(event.target.files).forEach(file=>{
        let reader = new FileReader();

        reader.onload = function(e){
            let img = document.createElement("img");
            img.src = e.target.result;
            img.style.width = "70px";
            img.classList.add("m-1","rounded");
            container.appendChild(img);
        }

        reader.readAsDataURL(file);
    });

    updateProfileStrength();
}

// 📊 PROFILE STRENGTH LOGIC
function updateProfileStrength(){

    let strength = 40;

    if(document.getElementById("skillsContainer").children.length > 0)
        strength += 20;

    if(document.getElementById("portfolioPreview").children.length > 0)
        strength += 20;

    let video = document.getElementById("videoPreview");
    if(video.style.display === "block")
        strength += 20;

    let bar = document.getElementById("profileStrength");
    bar.style.width = strength + "%";
    bar.innerText = strength + "%";

}

</script>