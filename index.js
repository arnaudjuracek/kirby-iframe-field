/* global panel */

panel.plugin('arnaudjuracek/iframe-field', {
  fields: {
    iframe: {
      props: {
        src: String,
        style: String
      },
      template: `
      <k-view class="iframe-field" style="{{style}}">
        <iframe :src=src frameborder="0"></iframe>
      </k-view>`
    }
  }
})
