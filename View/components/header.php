<header class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <h1>SteelCross admin panel</h1>
        </div>
        <div class="col-xs-12 col-md-2 text-right">
            <?php if (authCheck()) : ?><h2><?php echo authUsername(); ?></h2> <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-right">
            <nav class="nav-bar">
                <ul>
                    <?php if (authCheck()) : ?><li class="btn btn-primary"><a href="<?php echo url('/about'); ?>">About</a></li> <?php endif; ?>
                    <?php if (authCheck()) : ?><li class="btn btn-primary"><a href="<?php echo url('/members'); ?>">Members</a></li> <?php endif; ?>
                    <?php if (authCheck()) : ?><li class="btn btn-primary"><a href="<?php echo url('/concerts'); ?>">Concerts</a></li> <?php endif; ?>
                    <?php if (authCheck()) : ?><li class="btn btn-primary"><a href="<?php echo url('/contacts'); ?>">Contacts</a></li> <?php endif; ?>
                    <?php if (!authCheck()) : ?><li class="btn btn-primary"><a href="<?php echo url('/register'); ?>">Registration</a></li> <?php endif; ?>
                    <?php if (!authCheck()) : ?><li class="btn btn-primary"><a href="<?php echo url('/'); ?>">Login</a></li> <?php endif; ?>
                    <?php if (authCheck()) : ?><li class="btn btn-primary"><a href="<?php echo url('/logout'); ?>">Logout</a></li> <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>
</header>
