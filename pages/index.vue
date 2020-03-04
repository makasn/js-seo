<template>
<div>
  <the-header />
  <div class="container">
    <div class="row">
      <main class="main column column-65">
        <div class="content">
          <shrine />
          <hr>
          <fortune />
          <hr>
          <notice />
          <hr>
          <reasons-to-like />
          <hr>
          <how-to-identify />
          <hr>
          <user-voice />
        </div>
      </main>
      <the-side-bar />
    </div>
  </div>
</div>
</template>

<script>
import '@/assets/css/home.css'
import TheHeader from '~/components/TheHeader'
import Shrine from '~/components/Shrine'
import Fortune from '~/components/Fortune'
import Notice from '~/components/Notice'
import ReasonsToLike from '~/components/ReasonsToLike'
import HowToIdentify from '~/components/HowToIdentify'
import UserVoice from '~/components/UserVoice'
import TheSideBar from '~/components/TheSideBar'

export default {
  components: {
    TheHeader,
    Shrine,
    Fortune,
    Notice,
    ReasonsToLike,
    HowToIdentify,
    UserVoice,
    TheSideBar
  }
}
</script>
