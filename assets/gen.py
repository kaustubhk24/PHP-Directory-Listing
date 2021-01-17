import subprocess

id=1
for id in range(160):
    video_input_path = 'assets/videos/{}.mp4'.format(id)
    img_output_path = 'assets/images/{}.png'.format(id)
    print (img_output_path)
    subprocess.call(['ffmpeg', '-i', video_input_path, '-ss', '00:00:10.000', '-vframes', '1', img_output_path])



