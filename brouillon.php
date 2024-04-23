<hmtl>
<header>
<style>

.sub-menu-link{
    display: flex;
    align-items: center;
    text-decoration: none;
    margin: 12px 0;
    color: #525252;
}
.sub-menu-link p{
    color: #525252;
    width: 100%;
}
.sub-menu-link t{
    font-size: 17px;
    color: #525252;
    transition: 0.5s;
}
.sub-menu-link:hover t{
    transform: translateX(5px);
}
.sub-menu-link:hover  p{
    font-weight: 680;
}
</style>
</header>
<body>
<div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <a href="#" class="sub-menu-link">
                            <p>Edit Profile</p>
                            <t>></t>
                        </a>
                        <a href="#" class="sub-menu-link">
                            <p>Settings & Privacy</p>
                            <t>></t>
                        </a>
                        <a href="#" class="sub-menu-link">
                            <p>Help & Support</p>
                            <t>></t>
                        </a>
                        <a href="logout.php" class="sub-menu-link">
                            <p>Logout</p>
                            <t>></t>
                        </a>
                    </div>
</div>
</body>
</hmtl>
