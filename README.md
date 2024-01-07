## HabiHabit
目標の達成や行動の習慣化をサポートするサービスです。  
ユーザーはアプリケーション上で継続したい行動を設定し、その実施状況を入力することで、進捗を把握することができます。  
アプリケーションが提供する実績のフィードバックによって、ユーザーはモチベーションを保ち、習慣の継続と目標の達成に向けて効果的に進めることができます。

## URL

#### デモアカウント
メールアドレス：  
パスワード：

## 開発理由
既存の習慣化アプリを利用していて感じた不便な点を解消したいという思いがありました。私は英語学習や運動などを習慣化するために、既存の習慣化アプリをいくつか活用しましたが、シンプルが故に機能が不足していると感じました。  
特に、次の2つの機能があると便利だと思いました。  
1. アプリ開始日より前に遡って記録できる機能です。これがないと、他の習慣化アプリに移行する際に、以前の記録を引き継げないことになります。過去の成果や進捗が見直せることは、モチベーションを維持するためには、とても重要です。
2. 習慣の継続日数などを表示する機能です。これらの情報を通じて、習慣化の進捗を把握することで、より達成感を得やすくなります。
   
これらの課題を解決することで、より継続しやすいアプリを提供したいと思い、このアプリケーションを制作しました。

## アプリケーションのイメージ

## 使用技術
Laravel  
MariaDB  
Tailwind CSS

## 機能一覧

## DB設計

## アプリケーションの特徴
#### 合計日数、継続日数

#### メモ機能
習慣を実行できたときの感想や、できなかったときの理由などを自由に記録できます。  
これらのメモを振り返ることで、ユーザーは自身の行動パターンや課題に気づき、それに基づいて習慣の改善や調整を行うことができます。
- 1日につき最大50文字までの日本語入力が可能です。
- 文字を全て消すことでメモを削除することができます。
- 日付の横には丸印が表示され、その日が習慣を達成した日であることを確認できます。

#### アーカイブ機能
習慣化が完了したり、途中で中断したくなった場合は、ホーム画面の習慣一覧からその習慣をアーカイブに移すことができます。  
アーカイブに保管された記録はいつでも閲覧可能であり、再開したいときは簡単に元に戻すことができます。
  
## 工夫したところ
#### ユーザーエクスペリエンスを向上
1. 日々の入力をストレスなく行えるように、習慣ごとに登録フォームを設け、本日の日付をセットしました。これにより、ユーザーは登録ボタンを押すだけで、記録することができます。今後は、複数の日付を選択できる機能を導入し、より手軽に記録できるようにする予定です。
2. カレンダーやメモの利便性向上のために、前後の月に移動できる矢印ボタンと、年月を一覧から選択できるセレクトボックスを設置しました。これにより、ユーザーが目的の月に容易にアクセスできるようにしました。

## 苦労したところ

## 今後実装したい機能
習慣の並び替え機能  
グラフで実績を表示する  
実勢登録時、複数選択可能にする
